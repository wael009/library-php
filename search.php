<?php
   // start the session
session_start();

require_once "classes/bookClass.php";
require_once "user.php";
include "layout/header.php";


?>

<div class="container-fluid mt-4">
<div class="">

  <main role="main" class="pb-3">
  <h1>Index</h1>

<!-- search row start -->
<div class="">
<form action="search.php" method="POST">
  <input type="text" name="search" placeholder="Search">
  <button type="submit" name="submit-search">Search</button>
</form>

</div>
<!-- search row finish -->
<div class="row mt-4">
<div class="col-lg-12">
<a href="create.php" class="float-right btn btn-success">Add Book</a> <br/><br/>

</div>
</div>

<!-- To list all the Books -->
<div class="row">
    <div class="col-lg-12">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Book Cover</th>
      <th scope="col">Book Title</th>
      <th scope="col">Author</th>
      <th scope="col">Publisher</th>
    </tr>
  </thead>
          <tbody>

<?php
  $searchObj = new bookClass();
  $rows = $searchObj->readAllData();
  //$rows = $searchObj->search();

  
  foreach ($rows as $row)
  {
?>
    <tr>
    <th scope="row"><?php echo $row['id']; ?></th>
    <td><a href="readOnce.php?id=<?php echo $row['id'];?>" >
          <img  src="upload/<?php echo $row['image'];?>" width="160" height="190" alt="Card image cap"></td>
        </a>
    <td><h6><br/><br/><br/><?php echo $row['title'];?></h6></td>
    <td><h6><br/><br/><br/><?php echo $row['author'];?></h6></td>
    <td><h6><br/><br/><br/><?php echo $row['publisher'];?><h6></td>
    
    <td><br/><br/><a href="readOnce.php?id=<?php echo $row['id'];?>"  class='btn btn-primary left-margin'>
          <span class='glyphicon glyphicon-list'></span> Read </a></td>
  </tr>
<?php
  }
?>
          </tbody>
        </table>
    </div>
    </div>
<!-- list of books finish -->
</main>
</div> 
</div> 









