<?php
include_once "Connect.php";
$id= $_GET['id'];
$sql = "DELETE FROM Users WHERE Id=$id";
if (mysqli_query($conn, $sql) === TRUE) {
    header("Location: Table_Users.php");
  }
?>