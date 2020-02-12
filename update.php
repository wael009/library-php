<?php
require_once "bookClass.php";
require_once "database.php";

// include the layout of the header
include "layout/header.php";

// get ID of the bookClass to be read
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

if(isset($_GET['id']))
{
  $uid = $_GET['id'];

  $updateObj = new bookClass();
  $result = $updateObj->readOnce($uid);
}



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

$id = $_POST['id'];

$updateObj = new bookClass();
$updateObj->update($fields, $id);

}

?>





<div class="container mt-4">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <h4 class="mb-4">Update Book</h4>

        <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $result['id'];?>">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter book title" value="<?php echo $result['title'];?>">
  </div>
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" name="author" placeholder="Author name" value="<?php echo $result['author'];?>">
  </div>
  <div class="form-group">
    <label for="publisher">publisher</label>
    <input type="text" class="form-control" name="publisher" placeholder="Publisher" value="<?php echo $result['publisher'];?>">
  </div>
  <div class="form-group">
    <label for="cover">Book Cover</label>
    <input type="file" class="form-control-file" name="cover" placeholder="cover" value="<?php echo $result['cover'];?>">
  </div>
  <br/> 

  <input type="submit" name="submit" class="btn btn-primary">
</form>


        
      </div>
     </div>
    </div>
</div>



