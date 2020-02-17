<?php
// To include database and any other object files
require_once "classes/bookClass.php";
require_once "classes/database.php";


if(isset($_POST['submit']))
{
  $title = $_POST['title'];
  $author = $_POST['author'];
  $publisher = $_POST['publisher'];
  $image = $_POST['image'];


$fields = [
  'title'=>$title,
  'author'=>$author,
  'publisher'=>$publisher,
  'image'=>$image
];

$createObj = new bookClass();
$createObj->create($fields);

// if(isset($POST['submit-cover']))

$createObj->uploadPhoto();




}

// to include the header
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
    <label for="image">Select book Cover</label>
    <input type="file" class="btn btn-outline-dark" name="image" placeholder="Book cover">
  </div>
  <br/> 
    <input type="submit" name="submit" class="btn btn-primary btn-lg">






  <br/> 
</form>


        
      </div>
     </div>
    </div>
</div>


