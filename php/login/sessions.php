<?php
if(!isset( $_SESSION['logged_in'] )|| time() - $_SESSION['login_time'] > 3000){
header("Location: /wm/admin_login.php");
return false;
}// END SESSION AND TIME CHECK
else
{
$_SESSION['login_time'] = time();
}
