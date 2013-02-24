<?php //view_quote.php
/*显示所有名人名言*/

//包含页头文件
define('TITLE','View All Quotes');
include('templates/header.html');

print '<h2>All Quotes</h2>';

//强制只有管理员可以访问该页面
if (!is_administrator()) {
print '<h2>Access Denied!</h2><p class="error">You do not have permission to access this page.</p>';
include('templates/footer.html');
exit();
}

//包含数据库连接
include('../mysql_connect.php');

//定义查询
$query = 'SELECT quote_id,quote,source,favorite FROM quotes ORDER BY quote_id DESC';

//运行查询
if ($r = mysql_query($query,$dbc)) {

//返回查询结果
while ($row = mysql_fetch_array($r)) {

//打印查询结果
print "<div><blochquote>{$row['quote']}</blockquote>- {$row['source']}\n";

//判断是否为受欢迎的
if ($row['favorite'] == 1) {

print '<strong>Favorite!</strong>';
}

//添加管理员连接
print "<p><b>Quote Admin:</b><a href=\"edit_quote.php?id={$row['quote_id']}\">Edit</a><->
<a href=\"delete_quote.php?id={$row['quote_id']}\">Delete</a></p></div>\n";

}//结束循环

}else{//没有运行查询
print '<p class="error">Could not retrieve the data because;<br/>'.mysql_error($dbc).'.</p><p>The query being run was:'.$query.'</p>';
}//结束查询条件语句

mysql_close($dbc);//关闭连接

include('templates/footer.html');//包含页脚文件

?>