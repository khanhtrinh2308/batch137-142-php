<?php
    include_once '../controllers/users.php';    
    $id = $_GET['id'];
    Users ::deleteUsers($id); 
?>