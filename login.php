<?php
session_start();
require 'require/requireOnce.php';

$conn = new user();
$check = $conn->login($username, $password);

if(isset($_POST['submit']))
{
	$username = $_POST['user'];
	$password = $_POST['pass'];
	if(!$check){
		$_SESSION['message'] = 'Invalid username or password';
    	header('location:index.php');
	}
	else{
		$_SESSION['user'] = $check;
		header('location:main.php');
	}
}

?>
