<?php

    // Creating abstract class to use the common attributes we want 
    // and to use them in any different database to connect 
abstract class AbstractDb
{
    	// Attributes
     // To specify the database connections variables
     private $host;
     private $dbName;
     private $dbuser;
     private $dbpass;
     private $pdo;

	// Constructor
    // constructor method that sets the common variables values at initialization
     public function __construct($host, $dbName, $dbuser, $dbpass)
     {
         $this->host = $host;
         $this->dbName = $dbName;
         $this->dbuser = $dbuser;
         $this->dbpass = $dbpass;
     }



    // Methods for the properties



    // Methods

}
?>