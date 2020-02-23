<?php
 require_once 'classes/database.php';
 
 //use \main\classes\database;

 class user extends database
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
        // to check either the username and password are not empty
        if(!empty($username) && !empty($password))
        {
            // selecting from the database the username and password
            $statement = $this->db->prepare("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
            // bind the paramter of the username and password
            $statement->bindParam(1, $username);
            $statement->bindParam(2, $password);    
            $statement->execute();  // to execute the statement
            
            //$result = $statement;
            $result = $statement->fetch(PDO::FETCH_OBJ);

            if ($statement->rowCount() > 0)
            {   $_SESSION['is_admin']=$result->level;
                return true;
            }
            else
            {	
                return false;
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