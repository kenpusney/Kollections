<?php //login.php
/*页面用于用户登陆网站*/

//使用默认值定义两个变量
$loggedin = false;
$error = false;

//检查表单是否已提交
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
//处理表单
if (!empty($_POST['email']) && !empty($_POST['password'])) {
 if ( (strtolower($_POST['email']) == 'me@example.com') &&($_POST['password'] == 'testpass') ){//相等！

 //创建cookie
 setcookie('Samuel', 'Clemens', time()+3600);

 //表示已登录
 $loggedin = true;
 
 }else{//不相等

 $error = 'The submitted email address and password do not match those on file!';
 }

 }else{//表单为填完整

 $error = 'Please make sure you enter both an email address and a password!';

 }
 }

 //设置页面标题并包含页头文件
 define('TITLE','Login');
 include('templates/header.html');

 //在出现错误时打印错误信息
 if($error) {
 print '<p class="error">'.$error.'</p>';
 }

 //检查用户是否已登录，如果没有登录则显示表单
 if ($loggedin) {

 print '<p>You are now logged in!</p>';
 }else{

 print '<h2>Login From</h2>
 <form action="login.php" method="post">
 <p><label>Email Address<input type="text" name="email" /></label></p>
 <p><label>Password<input type="password" name="password" /></label></p>
 <p><input type="submit" name="submit" value="Log In" /></p>
 </form>';

 }

 include('templates/footer.html');//包含页脚文件
 ?>