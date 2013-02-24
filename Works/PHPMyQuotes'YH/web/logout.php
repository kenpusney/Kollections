<?php //logout.php
/*登出页面，删除cookie*/

//如果cookie存在则删除
if (isset($_COOKIE['Samuel'])) {
setcookie('Samuel', FALSE, time()-300);
}

//顶叶页面标题并包含页头文件
define('TITLE','Logout');
include('templates/header.html');

//打印一条消息
print '<p>You are now logged out.</p>';

//包含页脚文件
include('templates/footer.html');
?>