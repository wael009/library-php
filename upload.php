<?php
if(isset($_SESSION['user'])){

}else{
    header('location:index.php');

}
require_once "classes/bookClass.php";
//require_once "login.php";




    $title = $_POST['title'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $isbn = $_POST['isbn'];
    $image = $_FILES['image']['name'];


    $fields = [
        'title'=>$title,
        'author'=>$author,
        'publisher'=>$publisher,
        'subject'=>$subject,
        'description'=>$description,
        'image'=>$image,
        'isbn'=>$isbn,

    ];

    move_uploaded_file($_FILES['image']['tmp_name'], "upload/". $_FILES["image"]['name']);
    $createObj = new bookClass();
    $createObj->create($fields);



