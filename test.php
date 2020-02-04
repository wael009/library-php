<?php

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



  // to display the book in saprate page
  public function read()
  {
  
  }
  
  
    // to create new book (will be in different page)
  public function create()
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