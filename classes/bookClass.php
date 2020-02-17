<?php
require_once 'BasicObject.php';
require_once "user.php";
require_once "ILibrary.php";


use \Main\BasicObject;
use main\classes\ILibrary;

class bookClass extends user implements ILibrary
{


      // Attributes

      private $dbTabel = "book"; //  table name in the database
      private $id;
      private $title;
      private $author;
      private $publisher;  
      private $subject;
      private $description;
      private $isbn;
      private $image;

      public function __construct() 
      {
      }

      
// ------------ Read all the books from database -------------//

  // To select and read all the data from database
  public function readAllData()
  { 
    // to select from the book database
    //$sql = "SELECT title, author, publisher, cover FROM book";
    $sql = "SELECT * FROM ". $this->dbTabel;  // to select data from database
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




// --------------- Creat new book ----------------//
    // to create new book (will be in different page)
    public function create($fields)
    {
      //$sql = "INSERT INTO book (title, author, publisher) VALUES (:title,:author,:publisher)";
      $implodeColumns = implode(', ',array_keys($fields));
      $implodPlaceholder = implode(", :",array_keys($fields));
  
      $sql = "INSERT INTO ".$this->dbTabel." ($implodeColumns) VALUES (:".$implodPlaceholder.")";
      
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
    


// --------------- Read one book ----------------//
    // To select a book from the database
    public function readOnce($id)
    {
      // to select the id from the databsae
      $sql = "SELECT * FROM ".$this->dbTabel." WHERE id = :id";

      // to praper the connection 
      $stmt = $this->connect()->prepare($sql);
      $stmt->bindValue(":id",$id);
      // execute the statment
      $stmt->execute();
      // to give the result to the array
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

      return $result;
    }


     
    
// ---------------- to update a book ---------------//
    public function update($fields, $id)
    {
      // $sql = "UPDATE book SET title=:title,author=:author,publisher=:publisher";
      $st = "";
      $count = 1;
      $totalFields = count($fields);
      
      foreach($fields as $key => $value)
      {
         if($count === $totalFields)
          {
            $set = "$key = :".$key;
            $st = $st.$set;
          }
         else
          {
            $set = "$key = :".$key.", ";
            $st = $st.$set;
            $count++;
          }
      }
    
      $sql = "";
      $sql.= "UPDATE ".$this->dbTabel. " SET ".$st;
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
      else
      {
        return false;
      }
    
    }
    
    

// ---------- Delete a book from the list -----------//
    public function delete($id)
    {
      // to delete data from database by using the id to spicfy the data need to delete
      $sql = "DELETE FROM ".$this->dbTabel." WHERE id = :id";
      // link to the database
      $stmt = $this->connect()->prepare($sql);
      $stmt->bindValue(":id", $id);
      $stmt->execute(); // execute
    }




// --------------- upload cover -----------------// 
      // will upload cover file to server
      function uploadPhoto(){
        
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // To check if the image fake or real one
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) 
        {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }


        // Check the size of the file
        if ($_FILES["image"]["size"] > 10240000) 
        {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }


        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } 
        else 
        {
            if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) 
            {
                echo "The file ". basename( $_FILES["upload"]["name"]). " has been uploaded.";
            } 
            else 
            {
                echo "Sorry, there was an error uploading your file.";
            }
        }
}



// ------------------ Search -----------------// 
    public function search(){
    

      $sql = "SELECT * FROM ".$this->dbTabel." WHERE title LIKE ?";  // to select data from database
      $result = $this->connect()->prepare($sql); // link to the database  
      $result->execute(array("{$title}%"));

      //$result->fetchAll(PDO::FETCH_ASSOC);
     
      if($result->rowCount() > 0)
      {
        while ($row = $result->fetchAll(PDO::FETCH_ASSOC))
        {
          $data[] = $row;
        } 
        return $data;
      }
      else
      {
        echo "Sorry.. there are no results matching!";
      }

    }



    // new code





} 





?>




