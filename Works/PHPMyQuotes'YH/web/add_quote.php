<?php //add_quote.php
/*�����������*/

//����ҳ����Ⲣ����ҳͷ�ļ�
define('TITLE','Add a quote');
include('templates/header.html');

print '<h2>Add a Qoutation</h2>';

//ǿ��ֻ�й���Ա���Է��ʸ�ҳ��
if (!is_administrator()) {

print '<h2>Access Denied!</h2><p class="error">You do not have permission to access this page.</p>';
include('templates/footer.html');
exit();
}

//�����Ƿ��ύ
if ($_SERVER['REQUEST_METHOD'] == 'POST') {//�����

if (!empty($_POST['quote'])&& !empty($_POST['source']) ) {

//�������ݿ�����
include('../mysql_connect.php');

//׼����ѯ��ʹ�õ�ֵ
$quote = mysql_real_escape_string(trim(strip_tags($_POST['quote'])), $dbc);
$source =  mysql_real_escape_string(trim(strip_tags($_POST['source'])), $dbc);

// ����favoriteֵ
if (isset($_POST['favorite'])) {
$favorite = 1;
}else{
$favorite = 0;
}

$query = "INSERT INTO quotes (quote,source, favorite) VALUES ('$quote','$source',$favorite)";
$r = mysql_query($query, $dbc);

if (mysql_affected_rows($dbc) == 1){
//��ӡһ����Ϣ
print '<p>Your quotation has been stored.</p>';
}else{
print '<p class="error">Could not store the quote because:<br/>'.mysql_error($dbc).'.</p><p>The query being run was:'.$query.'</p>';
}

//�ر�����
mysql_close($dbc);
}else{//û����д��������
print '<p class="error">Please enter a quotation and a source!</p>';
}

}//�����ύ�������

//����php�ڲ���ʾ��
?>

<form action="add_quote.php" method="post">
<p><label>Quote<textarea name="quote" rows="5" cols="30">
</textarea></label></p>
<p><label>Source<input type="text" name="source" /></label></p>
<p><label>Is this a favorite?<input type="checkbox" name="favorite" value="yes" /></label></p>
<p><input type="submit" name="submit" balue="Add This Quote!" /></p>
</form>
