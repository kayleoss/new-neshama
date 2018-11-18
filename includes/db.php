<?php 
$user = 'root';
$password = 'root';
$db = 'neshama';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$conn = mysqli_connect(
   $host,
   $user,
   $password,
   $db,
   $port
);
?>