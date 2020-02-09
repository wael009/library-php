<?php
//require_once 'BasicObject.php';
require_once "user.php";


class test extends user
{


      // Attributes

      private $conn;   // database connection
      private $table_name = "book"; //  table name in the database
  
      private $id;
      private $title;
      private $author;
      private $publisher;


      
  public function select()
  { 
    // to select from the book database
    $sql = "SELECT * FROM book";
    $result = $this->connect()->query($sql);

    if($result->rowCount() > 0)
    {
      while ($row = $result->fetch())
      {
        $data[] = $row;
      }
      return $data;
    }
  }
  
  
    // to create new book (will be in different page)
  public function create()
  {
        //$sql = "INSERT INTO book (title, author, publisher) VALUES (:title,:author,:publisher)";
    $implodeColumns = implode(', ',array_keys($fields));

    $implodPlaceholder = implode(", :",array_keys($fields));

    // to insert the data to the database.
    $sql = "INSERT INTO book ($implodeColumns) VALUES (:".$implodPlaceholder.")";

    // still need to do the statement and connection to the database


  
  }
  

   // to display the book in saprate page
   public function read()
   {
   

   }
  
  
    // to update a book (will be in different page as well)
  public function update()
  {
  
  }
  
    // Delete a book from the list
  public function delete()
  {
  
  }




}

?>