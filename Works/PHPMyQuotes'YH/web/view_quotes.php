<?php //view_quote.php
/*��ʾ������������*/

//����ҳͷ�ļ�
define('TITLE','View All Quotes');
include('templates/header.html');

print '<h2>All Quotes</h2>';

//ǿ��ֻ�й���Ա���Է��ʸ�ҳ��
if (!is_administrator()) {
print '<h2>Access Denied!</h2><p class="error">You do not have permission to access this page.</p>';
include('templates/footer.html');
exit();
}

//�������ݿ�����
include('../mysql_connect.php');

//�����ѯ
$query = 'SELECT quote_id,quote,source,favorite FROM quotes ORDER BY quote_id DESC';

//���в�ѯ
if ($r = mysql_query($query,$dbc)) {

//���ز�ѯ���
while ($row = mysql_fetch_array($r)) {

//��ӡ��ѯ���
print "<div><blochquote>{$row['quote']}</blockquote>- {$row['source']}\n";

//�ж��Ƿ�Ϊ�ܻ�ӭ��
if ($row['favorite'] == 1) {

print '<strong>Favorite!</strong>';
}

//��ӹ���Ա����
print "<p><b>Quote Admin:</b><a href=\"edit_quote.php?id={$row['quote_id']}\">Edit</a><->
<a href=\"delete_quote.php?id={$row['quote_id']}\">Delete</a></p></div>\n";

}//����ѭ��

}else{//û�����в�ѯ
print '<p class="error">Could not retrieve the data because;<br/>'.mysql_error($dbc).'.</p><p>The query being run was:'.$query.'</p>';
}//������ѯ�������

mysql_close($dbc);//�ر�����

include('templates/footer.html');//����ҳ���ļ�

?>