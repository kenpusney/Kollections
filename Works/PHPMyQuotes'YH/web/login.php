<?php //login.php
/*ҳ�������û���½��վ*/

//ʹ��Ĭ��ֵ������������
$loggedin = false;
$error = false;

//�����Ƿ����ύ
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
//�����
if (!empty($_POST['email']) && !empty($_POST['password'])) {
 if ( (strtolower($_POST['email']) == 'me@example.com') &&($_POST['password'] == 'testpass') ){//��ȣ�

 //����cookie
 setcookie('Samuel', 'Clemens', time()+3600);

 //��ʾ�ѵ�¼
 $loggedin = true;
 
 }else{//�����

 $error = 'The submitted email address and password do not match those on file!';
 }

 }else{//��Ϊ������

 $error = 'Please make sure you enter both an email address and a password!';

 }
 }

 //����ҳ����Ⲣ����ҳͷ�ļ�
 define('TITLE','Login');
 include('templates/header.html');

 //�ڳ��ִ���ʱ��ӡ������Ϣ
 if($error) {
 print '<p class="error">'.$error.'</p>';
 }

 //����û��Ƿ��ѵ�¼�����û�е�¼����ʾ��
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

 include('templates/footer.html');//����ҳ���ļ�
 ?>