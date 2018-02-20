<?php
	include '../assets/connect.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

	if(isset($_POST['submit_login']))
	{
	$username = strip_tags(trim(mysqli_real_escape_string($con,$_POST['email'])));
	$password = strip_tags(trim(mysqli_real_escape_string($con,$_POST['password'])));
	$salt = '%fgh^^7$#$$';
	$password = hash('sha512',$salt.$password);
	$date = date("d-m-Y H:i:s");

	if(empty($username) || empty($password))
	{
	echo "Inloggegevens onjuist";
	return false;
	}


	$query = "SELECT username,password FROM `users` WHERE username='$username' AND password='$password' LIMIT 1";
	$result = mysqli_query($con,$query);
	$count_rows = mysqli_num_rows($result);

	if($count_rows ==1)
	{
	session_start();
	$_SESSION['username'] = $_POST['email'];
	$_SESSION['login_time'] = time();
	header('Location:admin-dashboard');
	}// end if count == 1

	else
	{
	echo 'Inloggegevens onjuist';
	return false;
	}//end else
}
