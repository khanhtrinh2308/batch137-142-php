<?php
$host = "localhost"; //$host: '127.0.0.1';
$user = "sa";
$password = "123456";
$database = "session4";
$conn = mysqli_connect($host, $user, $password, $database);// co the tao connect rieng va dung ham include
mysqli_set_charset($conn,"utf8");// set kieu du lieu truyen vao db la utf8
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
?>