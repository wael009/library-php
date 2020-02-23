<?php
   // start the session
//session_start();

// will direct this page to the main page, if the login was successful


require_once "classes/bookClass.php";
require_once "login.php";
include "layout/header.php";

if(isset($_GET['del']))
{
  $id = $_GET['del'];

  $deleteBook = new bookClass();
  $deleteBook->delete($id);
}

?>

<div class="container-fluid mt-4">
<div class="">

  <main role="main" class="pb-3">
  <h1>Index</h1>

<!-- row for filter -->
<div class="row mt-4 " >
  <div class="col mb-3">
    <form class="form-inline" method="post" action="">

      <div class="form-group">
        <div class="col">
            <label class="control-label" for="FilterByBooksOptions">Book Options</label>
            <select name="FilterByBookssOptions" class="form-control"><option selected="selected" value="0">Any</option>
              <option value="1">Academic books</option>
                <option value="2">Historical books</option>
              <option value="3">Programming books</option>
              <option value="4">Drama books</option>
              <option value="5">Science books</option>
            </select>
      </div>

        <div class="col">
            <label class="control-label" for="FilterByOption">Filter By</label>
            <select name="FilterByOption" class="form-control"><option selected="selected" value="0">All</option>
              <option value="1">By Name...</option>
              <option value="2">By Propery Type...</option>
              <option value="3">By Review Rating...</option>
              <option value="4">By Title Or Propery</option>
            </select>
        </div>


        <div class="col">
            <label class="control-label">Filter Value</label>
            <input type="text" name="FilterByValue" class="form-control" value="">
        </div>


        <div class="col">
            <input type="submit" name="filter" class="btn btn-primary mt-3" value="Go"/>
        </div>

       </div>
    </form>
  </div>
</div>
<!-- search row filter -->

<!-- search row start -->

<form action="search.php" method="POST">
  <input type="text" name="search" placeholder="Search">
  <button type="submit" class="btn btn-info" name="submit-search">Search</button>
</form>

<!-- search row finish -->
<div class="row mt-4">
<div class="col-lg-12">
    <?php if($_SESSION['is_admin']=='admin'){ ?>
<a href="create.php" class="float-right btn btn-success btn">Add Book</a><br/><br/><?php }?>

</div>
</div>

<!-- To list all the Books -->
<div class="row">
    <div class="col-lg-12">


        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Book Cover</th>
      <th scope="col">Book Title</th>
      <th scope="col">Author</th>
      <th scope="col">Publisher</th>
    </tr>
  </thead>
          <tbody>
          
<?php

  $readObj = new bookClass();
  $rows = $readObj->readAllData();
if(isset($_POST['filter'])){
    $bookoption = isset($_POST['FilterByBookssOptions'])?$_POST['FilterByBookssOptions']:'';
    $filterby= isset($_POST['FilterByOption'])?$_POST['FilterByOption']:'';
    $filterval = isset($_POST['FilterByValue'])?$_POST['FilterByValue']:'';
    $rows = $readObj->serachfilter($bookoption,$filterby,$filterval);
//    print_r($rows);

}

if(isset($rows)) {
    foreach ($rows as $row) {
        ?>
        <tr>
            <td><a href="readOnce.php?id=<?php echo $row['id']; ?>">
                    <img src="upload/<?php echo $row['image'] ?>" id="frontImg" alt="Card image cap"></td>
            </a>
            <td><p><?php echo $row['title']; ?></p></td>
            <td><p><?php echo $row['author']; ?></p></td>
            <td><p><?php echo $row['publisher']; ?><p></td>

            <td><br/><br/><a href="readOnce.php?id=<?php echo $row['id']; ?>" class='btn btn-primary btn'>
                    <span class='glyphicon glyphicon-list'></span> Read </a></td>
        </tr>
        <?php
    }
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









