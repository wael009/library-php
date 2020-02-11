<?php
// to start the session.
session_start();

// to include hte required file
require_once 'user.php';

// crate new connection object
$conn = new user();

if(isset($_POST['submit']))
{
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$check = $conn->login($username, $password);
	// to make sure if the connection was successfully and redirect the page to the main one if yes.
	if(!$check)
	{
		$_SESSION['alert'] = 'username or password is incorrect';  // To make sure if the username and password correct
    	header('location:index.php');	 // If no stay in index page.
	}
	else
	{
		$_SESSION['user'] = $check;
		header('location:main.php');	// If yes redirct to the main page.
	}
}

?>
