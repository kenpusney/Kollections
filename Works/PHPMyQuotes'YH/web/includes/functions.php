<?php //functions.php
/*�ű������Զ��庯��*/

//��������û��Ƿ�Ϊ����Ա
//��������������ѡ����
//��������һ������ֵ
function is_administrator($name = 'Samuel', $value = 'Clemens'){

//���cookie�Ƿ���ں�cookieֵ��
if(isset($_COOKIE[$name])&&($_COOKIE[$name] == $value)){
return true;
}else{
return false;
}
}//����is_adiministrator()����

?>