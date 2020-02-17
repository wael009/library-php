<?php
require_once "classes/bookClass.php";
require_once "classes/database.php";

// include the layout of the header
include "layout/header.php";

// need to the get ID of the bookClass to be read
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
  $subject = $_POST['subject'];
  $description = $_POST['description'];
  $isbn = $_POST['isbn'];
  $image = $_POST['image'];


$fields = [
  'title'=>$title,
  'author'=>$author,
  'publisher'=>$publisher,
  'subject'=>$subject,
  'description'=>$description,
  'image'=>$image,
  'isbn'=>$isbn,

];

$id = $_POST['id'];

$updateObj = new bookClass();
$updateObj->update($fields, $id);

}

?>

<div class="container mt-4">
<div class="main">
  <div class="row">
    <div class="col-lg-8">
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
    <label for="publisher">Publisher</label>
    <input type="text" class="form-control" name="publisher" placeholder="Publisher" value="<?php echo $result['publisher'];?>">
  </div>

  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" name="subject" placeholder="subject" value="<?php echo $result['subject'];?>">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" name="description" placeholder="description" value="<?php echo $result['description'];?>">
  </div>

  <div class="form-group">
    <label for="isbn">ISBN</label>
    <input type="text" class="form-control" name="isbn" placeholder="Input ISBN number please" value="<?php echo $result['isbn'];?>">
  </div>

  <div class="form-group">
    <label for="cover">Book Cover</label>
    <input type="file" class="form-control-file" name="image" placeholder="image" value="<?php echo $result['image'];?>">
  </div>
  <br/> 

  

  <input type="submit" name="submit" class="btn btn-primary">
</form>


        
     </div>
     <div class="col-lg-4">
    <tr><br/><br/><br/>
        <td><img src="upload/<?php echo $result['image'];?>" width="400" height="490" alt="Card image cap"></td>
    </tr>
</div>
    </div>
  </div>
</div>



