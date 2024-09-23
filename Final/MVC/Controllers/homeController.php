<?php
session_start();
require_once('../Models/alldb.php');

  
if (isset($_POST['add'])) {
    header("Location: ../Views/insert.php");
    exit();
}
 
if (isset($_POST['insert'])) {
    $bookID = $_POST['bookID'];
    $bookName = $_POST['bookName'];
    $genre = $_POST['genre'];
    $available = $_POST['available'];

    if (add($bookID, $bookName, $genre, $available)) {
        $_SESSION['mess'] = "New record created successfully!";
    } else {
        $_SESSION['mess'] = "Error: Could not insert the record.";
    }
    header("Location: ../Views/librarian.php");
    exit();
}
  

 
?>