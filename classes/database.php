<?php
//namespace main\classes;

require_once 'classes/IDatabase.php';
require_once 'BasicObject.php';


use \Main\BasicObject;
use \main\classes\IDatabase;


class database implements IDatabase
{
    // To specify the database connections variables
    private $dbserver = 'mysql:host=localhost;dbname=library';  // define the (host and dbname)
    private $dbuser = "root";
    private $dbpass = "";
    private $pdo;

    public function connect()    
    {
        //   to create new PDO connection.
        $this->pdo = new PDO($this->dbserver, $this->dbuser, $this->dbpass);

        // To disable emulated prepared statements and use real prepared statements (to avoid inject malicious SQL attack).
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        // To set the PDO error mode to exception.
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

        return $this->pdo;
    }

    // To disconnect the connection to the database.
    public function disconnect()
    {
        $this->pdo = null;

        return $this->pdo;
    }
}


?>