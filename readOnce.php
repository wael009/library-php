<?php

include_once 'database.php';
include_once 'bookClass.php';

// include the layout of the header
include_once "layout/header.php";
 
// get ID of the bookClass to be read
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
 


// prepare objects
$readOnceObj = new bookClass();
$readOnceObj->readOnce($id);    // read the details of bookClass to be read
 
// set ID property of bookClass to be read
//$bookClass->id = $id;

if(isset($_GET['id']))
{
  $uid = $_GET['id'];

  $updateObj = new bookClass();
  $result = $updateObj->readOnce($uid);
}


if(isset($_GET['del']))
{
  $id = $_GET['del'];

  $deleteBook = new bookClass();
  $deleteBook->delete($id);
}

// read bookClasss button DONE
// HTML table for displaying a bookClass details
?>



<div class="container mt-4">
<div class="main">

  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <h4 class="mb-4">Book details</h4>

<table class='table table-hover table-bordered'>
 
    <tr>
        <td>Title</td>
        <td><?php echo $result['title'];?></td>
    </tr>
 
    <tr>
        <td>Author</td>
        <td><?php echo $result['author'];?></td>
    </tr>
 
    <tr>
        <td>Publisher</td>
        <td><?php echo $result['publisher'];?></td>
    </tr>
 
   
   
    <tr>

    </tr>
 
</table>

        <td>
            <a href="update.php?id=<?php echo $result['id'];?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> | 
            <a href="main.php?del=<?php echo $result['id']; ?>" class="text-danger" onClick="return confirm('Are you sure to delete this book?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
        </td>

<!-- to move to the main page -->
<div class='right-button-margin'>
    <a href='main.php' class='float-right btn btn-primary pull-right'> Back to list </a>
</div>

 
      </div>
     </div>
    </div>
</div>
</div>

<?php
// to set the footer
include_once "layout/footer.php";
?>