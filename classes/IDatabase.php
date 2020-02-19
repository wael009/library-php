<?php

namespace Main\classes;

// Creating an Interface for the database to add the standard methods that need to implement in a different database
// Classes play the role of phrase generators

interface IDatabase
{
	public function connect();
    public function disconnect();
	//public function addDatabase();  // if we want to add different database
}
?>