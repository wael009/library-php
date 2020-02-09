<?php
   // start the session
session_start();

require_once "test.php";
include "layout/header.php";

?>

<div class="container-fluid m-4">
  <div class="row">
    <div class="col-sm-12">
      <div class="">
        <h4 class="mb-4"> All Books </h4>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Book Title</th>
      <th scope="col">Author</th>
      <th scope="col">Publisher</th>
    </tr>
  </thead>
  <tbody>

<?php
// To make new object from the test
  $newtest = new test();
  $rows = $newtest->select();
  
  foreach ($rows as $row)
  {
?>
    <tr>
    <th scope="row"><?php echo $row['id']; ?></th>
    <td><?php echo $row['title'];?></td>
    <td><?php echo $row['author'];?></td>
    <td><?php echo $row['publisher'];?></td>
   </tr>
<?php
  }
?>
  </tbody>
</table>      
      </div>
     </div>
    </div>
</div>



