<?php

class database
{

    // to specify the database connections variables
    private $dbserver = 'mysql:host=localhost;dbname=library';
    private $dbuser = "root";
    private $dbpass = "";
    private $pdo;


    protected function connect()    
    {
        $this->pdo = new PDO($this->dbserver, $this->dbuser, $this->dbpass);

        // To disable emulated prepared statements and use real prepared statements (to avoid inject malicious SQL attack)
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        // To set the PDO error mode to exception
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        return $this->pdo;
    }


    
    // To disconnect the connection to the database
    public function disconnect()
    {
        $this->pdo = null;
        return $this->pdo;
    }

}




?>