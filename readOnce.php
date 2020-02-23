<?php


include_once 'login.php';
include_once 'classes/bookClass.php';

// header page
include_once "layout/header.php";
 
// to get the ID of the bookClass to be read
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
 


// Set the object
$readOnceObj = new bookClass();
$readOnceObj->readOnce($id);
 
// set ID property of bookClass to be read
//$bookClass->id = $id;

if(isset($_GET['id']))
{
  $gitId = $_GET['id'];

  $updateObj = new bookClass();
  $result = $updateObj->readOnce($gitId);
}


if(isset($_GET['del']))
{
  $id = $_GET['del'];

  $deleteBook = new bookClass();
  $deleteBook->delete($id);
}

?>



<div class="container mt-4">
<div class="main">

  <div class="row">
    <div class="col-lg-8">
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
        <td>Subject</td>
        <td><?php echo $result['subject'];?></td>
    </tr>
   
    <tr>
        <td>Description</td>
        <td><?php echo $result['description'];?></td>
    </tr>

    <tr>
        <td>ISBN</td>
        <td><?php echo $result['isbn'];?></td>
    </tr>
 
</table>
<br/>
<?php if($_SESSION['is_admin']=='admin'){ ?>
        <td>
            <a href="update.php?id=<?php echo $result['id'];?>" class="btn btn-outline-success btn"><i class="fa fa-fw fa-edit"></i> Edit</a> |
            <a href="main.php?del=<?php echo $result['id']; ?>" class="btn btn-outline-danger btn" onClick="return confirm('Are you sure to delete this book?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
        </td>
        <?php } ?>

<!-- to move to the main page -->
<div class='right-button-margin'>
    <a href='main.php' class='float-right btn btn-primary btn'> Back to list </a>
</div>
     </div>
     <div class="col-lg-4">
     <tr><br/><br/>
        <td><img src="upload/<?php echo $result['image'];?>" width="380" height="460" alt="Card image cap"></td>
    </tr>
</div>
    </div>
</div>
</div>

<?php
// to set the footer
include_once "layout/footer.php";
?>