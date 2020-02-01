<?php
// to start the session.
session_start();

// to include hte reuired files
require 'require/requireOnce.php';

// crate new connection object 
$conn = new user();
$check = $conn->login($username, $password);

if(isset($_POST['submit']))
{
	$username = $_POST['user'];
	$password = $_POST['pass'];
	if(!$check){
		$_SESSION['message'] = 'Invalid username or password'; // need to delete it,,, to make sure if the username and password correct
    	header('location:index.php');
	}
	else{
		$_SESSION['user'] = $check;
		header('location:main.php');
	}
}

?>
