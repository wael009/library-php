<?php

class Library implement ILibrary{

         // attributes

    private $title;
    private $author;
    private $publisher;
    private $isbn;
    private $subject;


        // Constructor
    public function __construct($title, $author, $publisher)
    {
        $this->_title = $title;
        $this->_author = $author;
        $this->_publisher = $publisher;

    }


        // Methods for propties



        // Methods

}


?>