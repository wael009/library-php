<?php
 require 'require/requireOnce.php';

 class user extends database // extends to access the database connection as the connect function has been set to be protected. (if 'public' we can get rid of the extends database)
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
            
            if ($statement->rowCount() == 1) 
            {   
                $_SESSION['user'] = $statement;
                header('location:main.php');  // to make sure if the connection was successfully
            }
            else
            {	$_SESSION['message'] = 'Invalid username or password'; // not finish yet
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