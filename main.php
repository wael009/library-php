<?php
   // start the session
session_start();

require_once "bookClass.php";
require_once "user.php";
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

<!-- row for search -->
  <div class="row mt-4 " >
        <div class="col mb-3">
            <form class="form-inline" method="post" action="/Books">
    <div class="form-group">
        <div class="col">
            <label class="control-label" for="FilterByBooksOptions">Book Options</label>
            <select name="FilterByBookssOptions" class="form-control" data-val="true" data-val-required="The Books Options field is required." id="SortFilterOptions_FilterByBooksOptions"><option selected="selected" value="0">Any</option>
              <option value="1">Academic books</option>
                <option value="2">Historical books</option>
              <option value="3">Programming books</option>
              <option value="4">Drama books</option>
              <option value="5">Science books</option>
            </select>
        </div>
        <div class="col">
            <label class="control-label" for="FilterBy.FilterByOption">Filter By</label>
            <select name="FilterBy.FilterByOption" class="form-control" data-val="true" data-val-required="The Filter By field is required." id="SortFilterOptions_FilterBy_FilterByOption"><option selected="selected" value="0">All</option>
              <option value="1">By Name...</option>
              <option value="2">By Propery Type...</option>
              <option value="3">By Review Rating...</option>
              <option value="4">By Title Or Propery</option>
            </select>
        </div>
        <div class="col">
            <label class="control-label" for="FilterBy.FilterByValue">Filter Value</label>
            <input type="text" name="FilterBy.FilterByValue" class="form-control" id="SortFilterOptions_FilterBy_FilterByValue" value="">
        </div>
        <div class="col">
            <label class="control-label" for="OrderBy">Order By</label>
            <select name="OrderBy" class="form-control" data-val="true" data-val-required="The Order By field is required." id="SortFilterOptions_OrderBy"><option selected="selected" value="0">sort by...</option>
              <option value="1">Name ↑</option>
              <option value="2">Views Rating ↓</option>
              <option value="3">Views Rating ↑</option>
            </select>
        </div>
        <div class="col">
            <div type="*" class="btn btn-primary mt-3">Go</div>
        </div>
    </div>
    <input type="hidden" name="PageSize" data-val="true" data-val-required="The Page Size field is required." id="SortFilterOptions_PageSize" value="20">
    <input type="hidden" name="PageNumber" data-val="true" data-val-required="The Page field is required." id="SortFilterOptions_PageNumber" value="1">
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8FrNU-bsig5CkdleC5-zy-85e4iTJFUwB1MVAZrBnQy_Pc1FBrDaiEErcpcptBTH93KU7-gloR_L3tb7SgM2rAsIFJ9NpTmdV3zCu70w7f_Ra4lmaFr_HPhY2oQUSJp7UUpJZBiqF0MUAXx_DuknX_M"></form>

        </div>
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
  $readObj = new bookClass();
  $rows = $readObj->readAllData();
  
  foreach ($rows as $row)
  {
?>
    <tr>
    <th scope="row"><?php echo $row['id']; ?></th>
    <td><a href="readOnce.php?id=<?php echo $row['id'];?>" >
          <img  src="<?php echo $row['cover'];?>" width="160" height="190" alt="Card image cap"></td>
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









