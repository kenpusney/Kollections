<?php //index.php
/*��վ��ҳ��������������
-������������
-�������������
-������ܻ�ӭ��������*/

//����ͷ�ļ�
include('templates/header.html');

//�������ݿ�����
include('../mysql_connect.php');

//�����ѯ
//����URL���ݹ�����ֵ���Ĳ�ѯ��ʽ
if (isset($_GET['random'])) {
$query = 'SELECT quote_id,quote, source,favorite FROM quotes ORDER BY RAND() DESC LIMIT 1';
	}elseif (isset($_GET['favorite'])) {
	$query = 'SELECT quote_id,quote,source,favorite FROM quotes WHERE favorite=1 ORDER BY RAND() DESC LIMIT 1';
	}else{
	$query ='SELECT quote_id,quote,source,favorite FROM quotes ORDER BY quote_id DESC LIMIT 1';
	}

	//������ѯ
	if ($r = mysql_query($query,$dbc)) {

	//���ز�ѯ���
	$row = mysql_fetch_array($r);

	//��ӡ��ѯ���
	print "<div><blockquote>{$row['quote']}</blockquote>-{$row['source']}";

	//�ж��Ƿ�Ϊ�ܻ�ӭ��
	if ($row['favorite'] ==1){
	print'<strong>Favorite!</strong>';
	}

	//���div��ǩ
	print '</div>';

	//�������Ա��½����ʾ����Ա����
	if (is_administrator()) {
	print "<p><b>Quote Admin:</b><a href=\"edit_quote.php?id={$row['quote_id']}\">Edit</a> <->
	<a href=\"delete_quote.php?id={$row['quote_id']}\">Delete</a>
	</p>\n";
	}

	}else{//û��������ѯ
	print '<p class="error">Could not retrieve the data because:<br/>'.mysql_error($dbc).'.</p><p>The query being run was:'.$query.'</p>';
	}//End of query IF

	mysql_close($dbc);//�ر�����

	print '<p><a href="index.php">Latst</a><-><a href="index.php?random=true">Random</a> <-> <a href="index.php?favorite=true"<Favorite</a></p>';

	include('templates/footer.html');//����ҳ���ļ�
	?>
