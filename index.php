<?php
session_start();
if(!isset( $_SESSION['logged_in'] )|| time() - $_SESSION['login_time'] > 3000){
header("Location: /wm/admin_login.php");
return false;
}// END SESSION AND TIME CHECK
else
{
$_SESSION['login_time'] = time();
}

if(isset($_GET['page']))
{
	$p = $_GET['page'];

	switch($p)
	{
		case "admin-dashboard":
		include 'inc/admin_dashboard.php';
		break;

	}
}
else
{
	include 'inc/admin_dashboard.php';
  return true;
}
