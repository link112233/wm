<?php
session_start();
include 'php/login/sessions.php';

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
