<?php //logout.php
/*�ǳ�ҳ�棬ɾ��cookie*/

//���cookie������ɾ��
if (isset($_COOKIE['Samuel'])) {
setcookie('Samuel', FALSE, time()-300);
}

//��Ҷҳ����Ⲣ����ҳͷ�ļ�
define('TITLE','Logout');
include('templates/header.html');

//��ӡһ����Ϣ
print '<p>You are now logged out.</p>';

//����ҳ���ļ�
include('templates/footer.html');
?>