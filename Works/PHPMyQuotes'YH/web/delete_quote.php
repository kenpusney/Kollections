<?php //delete_quote.php
/*删除名人名言*/

//定义后面标题并包含页头文件
define('TITLE','Dlete a Quote');
include('templates/header.html');
print '<h2>Delete a Quotation</h2>';

//强制只有管理员可以访问该页面
if (!is_administrator()) {
print '<h2>Access Denied!</h2>
<p class="error">You do not have permission to access this page.</p>';
include('templates/footer.html');
exit();
}

//包含数据库连接
include('../mysql_connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['id'] >0) ) {
//在表单中显示名人名言

//定义查询
$query = "SELECT quote, source, favorite FROM quotes WHERE quote_id={$_GET['id']}";
if ($r = mysql_query($query,$dbc) ){//运行查新

$row = mysql_fetch_array($r);//返回信息

//创建表单

print '<form action="delete_quote.php" method="post">
<p>Are you sure you want to delete this quote?</p>
<div><blockquote>'.$row['quote'].'</blockquote>-'.$row['source'];

//检查是否选中受欢迎复选框
if ($row['favorite'] == 1) {
print '<strong>Favorite!</strong>';
}

print '</div><br/><input type="hidden" name="id" value="'.$_GET['id'].'" />
<p><input type="submit" name="submit" value="Delete this Quote!" /></p>
</form>';

}else{//无法获取消息
print '<p class="error">Could not retrieve the quote because:<br/>'.mysql_error($dbc).'.</p><p>The query being run was:'.$query.'</p>';
}

}elseif (isset($_POST['id']) && is_numeric($_POST['id']) && ($_POST['id'] >0) )
{//处理表单

//定义查询
$query = "DELETE FROM quotes WHERE quote_id={$_POST['id']} LIMIT 1";
$r = mysql_query($query,$dbc);//执行查询

//打印消息
if (mysql_affected_rows($dbc) == 1) {
print '<p>The quote entry has been deleted.</p>';
}else{
print '<p class="error">Could not delete the blog entry because:<br/>'.mysql_error($dbc).'.</p><p>The query being run was:'.$query.'</p>';
}

}else{//没有获取id 
print '<p class="error">This page has been accessed in error.</p>';
}//结束住条件语句

mysql_close($dbc);//关闭连接
include('templates/footer.html');
?>