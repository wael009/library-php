<?php
// To include database and any other object files
require_once "bookClass.php";
require_once "database.php";



if(isset($_POST['submit']))
{
  $title = $_POST['title'];
  $author = $_POST['author'];
  $publisher = $_POST['publisher'];
  $cover = $_POST['cover'];


$fields = [
  'title'=>$title,
  'author'=>$author,
  'publisher'=>$publisher,
  'cover'=>$cover
];

$createObj = new bookClass();
$createObj->create($fields);

}

// include the layout of the header
include "layout/header.php";
?>


<div class="container mt-4">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <h4 class="mb-4"> Add Book </h4>



        <form action="" method="post">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter book title">
  </div>
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" name="author" placeholder="Author name">
  </div>
  <div class="form-group">
    <label for="publisher">Publisher</label>
    <input type="text" class="form-control" name="publisher" placeholder="Publisher">
  </div>
  
  <div class="form-group">
    <label for="cover">Book Cover</label>
    <input type="file" class="form-control-file" name="cover" placeholder="Book cover">
  </div>
  <br/> 
    <input type="submit" name="submit" class="btn btn-primary">
</form>


        
      </div>
     </div>
    </div>
</div>


