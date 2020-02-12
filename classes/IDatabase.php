<?php

namespace Main\InterfaceStuff;

// Creating an Interface for the database to add the standard methods that need to implement in a different database
// Classes play the role of phrase generators
interface IDatabase
{
	public function connect();
	public function disconnect();

}

?>