<?php
session_start();

// to include the header
include "layout/header.php";

?>
<div class="container mt-4">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <h4 class="mb-4"> Add Book </h4>

        <form action="upload.php" method="POST" enctype="multipart/form-data" >

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
    <label for="subject">Subject</label>
    <input type="text" class="form-control" name="subject" placeholder="subject">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" name="description" placeholder="description">
  </div>

  <div class="form-group">
    <label for="isbn">ISBN</label>
    <input type="text" class="form-control" name="isbn" placeholder="isbn">
  </div>
  
  <div class="form-group">
    <label for="image">Select book Cover</label>
    <input type="file" class="btn btn-outline-dark" name="image" placeholder="Book cover">
  </div>
  
  <br/> 
    <input type="submit" name="submit" class="btn btn-primary btn">
  <br/> 
</form>

      </div>
     </div>
    </div>
</div>


