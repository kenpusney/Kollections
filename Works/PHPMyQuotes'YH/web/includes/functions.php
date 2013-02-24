<?php //functions.php
/*脚本定义自定义函数*/

//函数检查用户是否为管理员
//函数接受两个可选参数
//函数返回一个布尔值
function is_administrator($name = 'Samuel', $value = 'Clemens'){

//检查cookie是否存在和cookie值：
if(isset($_COOKIE[$name])&&($_COOKIE[$name] == $value)){
return true;
}else{
return false;
}
}//结束is_adiministrator()函数

?>