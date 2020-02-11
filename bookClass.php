<?php
//require_once 'BasicObject.php';
require_once "user.php";


class bookClass extends user
{


      // Attributes

      private $conn;   // database connection
      private $table_name = "book"; //  table name in the database
  
      private $id;
      private $title;
      private $author;
      private $publisher;  



      

  // To select and read all the data from database
  public function readAllData()
  { 
    // to select from the book database
    //$sql = "SELECT title, author, publisher, cover FROM book";
    $sql = "SELECT * FROM book";  // to select data from database
    $result = $this->connect()->query($sql); // link to the database  

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
    public function create($fields)
    {
      //$sql = "INSERT INTO book (title, author, publisher) VALUES (:title,:author,:publisher)";
      $implodeColumns = implode(', ',array_keys($fields));
      $implodPlaceholder = implode(", :",array_keys($fields));
  
      $sql = "INSERT INTO book ($implodeColumns) VALUES (:".$implodPlaceholder.")";
      
      // Connect to the database
      $stmt = $this->connect()->prepare($sql);
  
     // same as  $stmt->bindParam(":author", $this->author);
      // to not repet the same statmenet for each Param
              // bind values 
      foreach($fields as $key => $value)
      {
         $stmt->bindValue(':'.$key,$value);
      }
  
        // If the statement was successfully executed return the page to the main one.
      if($stmt->execute())
      {
        header('Location: main.php');
      }
      else
      {
        return false;
      }
    
    }
    


      ////////////////////////////////////////////////////////////////////
    /////////////// NOT FINISH YET /////////////////////////////////////
    ////////////////////////////////////////////////////////////////////
     // -------------- to display the book in saprate page -------------------//
     public function readOne()
     {
     
      $sql = "SELECT title, author, publisher, cover FROM " . $this->table_name . " WHERE id = ? LIMIT 0,1";
  
      $stmt = $this->connect()->prepare($sql);
      $stmt->bindParam(1, $this->id);
      $stmt->execute();
  
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
  
      $this->title = $row['title'];
      $this->price = $row['author'];
      $this->publisher = $row['publisher'];
      $this->cover = $row['cover'];
  
     }
    


    // To select a book from the database
    public function readOnce($id)
    {
      // to select the id from the databsae
      $sql = "SELECT * FROM book WHERE id = :id";

      // to praper the connection 
      $stmt = $this->connect()->prepare($sql);
      $stmt->bindValue(":id",$id);
      // execute the statment
      $stmt->execute();
      // to give the result to the array
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

      return $result;
    }


     
    
      // ----- to update a book (will be in different page as well) -----//
    public function update($fields, $id)
    {
      // $sql = "UPDATE book SET title=:title,author=:author,publisher=:publisher";
      $st = "";
      $counter = 1;
      $total_fields = count($fields);
      foreach($fields as $key => $value)
      {
         if($counter === $total_fields)
          {
            $set = "$key = :".$key;
            $st = $st.$set;
          }
         else
          {
            $set = "$key = :".$key.", ";
            $st = $st.$set;
            $counter++;
          }
      }
    
      $sql = "";
      $sql.= "UPDATE book SET ".$st;
      $sql.=" WHERE id = ".$id;
    
      $stmt = $this->connect()->prepare($sql);
      foreach($fields as $key => $value)
      {
        $stmt->bindValue(':'.$key, $value);
      }
          
    if($stmt->execute())
      {
        header('Location: main.php');
      }
    
    }
    
    


      // --------- Delete a book from the list ----------//
    public function delete($id)
    {
      // to delete data from database by using the id to spicfy the data need to delete
      $sql = "DELETE FROM book WHERE id = :id";
      // link to the database
      $stmt = $this->connect()->prepare($sql);
      $stmt->bindValue(":id", $id);
      $stmt->execute(); // execute
    }


}





?>




