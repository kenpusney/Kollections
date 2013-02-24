<?php //edit_quote.php
/*�༭��������*/
//����ҳ����Ⲣ����ҳͷ�ļ�
define('TITLE','Edit a Quote');
include('templates/header.html');

print '<h2>Edit a Quotation</h2>';

//ǿ��ֻ�й���Ա���Է��ʸ���ҳ
if (!is_administrator()) {
print '<h2>Access Denied!</h2>
<p class="error">You do not have premission to access this page.</p>';
include('templates/footer.html');
exit();
}

//�������ݿ�����
include('../mysql_connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['id'] > 0) )
{//Display the entry in a form

//�����ѯ
$query = "SELECT quote,source,favorite FROM quotes WHERE quote_id={$_GET['id']}";
if ($r = mysql_query($query,$dbc)) {//���в�ѯ

$row = mysql_fetch_array($r);//������Ϣ

//������
print '<form action="edit_quote.php" method="post">
<p><label>Quote<textarea name="quote" rows="5" cols="30">'.htmlentities($row['quote']).'</textarea></label></p>
<p><label>Source<input type="text" name="source" value="'.htmlentities($row['source']).'" /></label></p>
<p><label>Is this a favorite? <input type="checkbox" name="favorite" value="yes"';

//����Ƿ�ѡ���ܻ�ӭ��ѡ��
if ($row['favorite'] ==1) {
print ' checked = "checked"';
}

//��ɱ�
print ' /></label></p>
<input type="hidden" name="id" value="'.$_GET['id'].'" />
<p><input type="submit" name="submit" value="Update This Quote!" /></p>
</form>';

}else{//�޷���ɻ�ȡ��Ϣ
print '<p class="error">Could not retrieve the quotation because:<br />'.mysql_error($dbc).'.</p><p>The query being run was:'.$query.'</p>';
}

}elseif (isset($_POST['id']) && is_numeric($_POST['id']) &&($_POST['id']>0))
{//�����

//��֤�����ݲ�ȷ����ȫ
$problem = FALSE;
if ( !empty($_POST['quote']) && !empty($_POST['source'])) {

//׼����ѯ��ʹ�õ�ֵ
$quote = mysql_real_escape_string(trim(strip_tags($_POST['quote'])),$dbc);
$source = mysql_real_escape_string(trim(strip_tags($_POST['source'])),$dbc);

//����favoriteֵ
if (isset($_POST['favorite'])) {
$favorite = 1;
}else{
$favorite = 0;
}

}else{
print '<p class="error">Please submit both a quotation and a source.</p>';
$problem = TRUE;
}

if (!$problem) {

//�����ѯ
$query = "UPDATE quotes SET quote ='$quote',source='$source',favorite='$favorite' WHERE quote_id={$_POST['id']}";
if ($r = mysql_query($query,$dbc)) {
print '<p>The quotation has been updated.</p>';
}else{
print '<p class="error">Could not update the quotation because:<br/>'.mysql_error($dbc).'.</p><p>The query being run was:'.$query.'</p>';
}
}//һ������

}else{//��û�л�ȡid
print '<p class="error">This page has beem accessed in error.</p>';
}//����ס�������

mysql_close($dbc);//�ر�����

include('templates/footer.html');
?>

