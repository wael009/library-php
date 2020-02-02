<?php
 require 'database.php';

 class user extends database // extends to access the database connection as the connect function has been set to be protected. (if 'public' we can get rid of the extends database).
 {
    private $db;

    // to create new connection object
    public function __construct() 
    {
        $this->db = new database();
        $this->db = $this->db->connect();
    }

    // to check the login if the username and password are already in the database
    public function login($username, $password) 
    {
        // to check that the username or password are not empty
        if(!empty($username) && !empty($password))
        {
            $statement = $this->db->prepare("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
            $statement->bindParam(1, $username);
            $statement->bindParam(2, $password);
            $statement->execute();
            
/* -----------  !!!!  DO NOT FORGET to fix this part again !!!!  ---------- */
            if ($statement->rowCount() == 1) 
            {   
                $_SESSION['user'] = $statement;// to make sure if the connection was successfully
                header('location:main.php');  // if yes go the main page
            }
            else
            {	$_SESSION['alert'] = 'username or password is incorrect!!'; // if not stay in the index page
                header('location:index.php');
            }
        }
    }

        // To finish and destroy the connection 
    public function log_out() {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
    }
 }

?>
