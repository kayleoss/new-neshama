<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	include "../layouts/head.php";
	include_once "../includes/db.php";
	if (isset($_POST['input']) && strlen($_POST['input']) >= 10 && strlen($_POST['input']) < 8000 && strlen($_POST['author']) > 2 )  {
	 	$text = '"' . mysqli_real_escape_string($conn, $_POST['input']) . '"';
	 	$author = mysqli_real_escape_string($conn, $_POST['author']);
	 	$sql = "INSERT INTO posts (text, author) VALUES ('$text', '$author')";
      	mysqli_query($conn, $sql);
      	header('Location: /pages/hub?success');
	 } else if (isset($_POST['input']) && strlen($_POST['input']) < 10) {
	 	header('Location: /pages/hub?failure=short');
	 } else if (isset($_POST['input']) && strlen($_POST['input']) >= 8000) {
	 	header('Location: /pages/hub?failure=long');
	 } else {
	 	header('Location: /pages/hub?failure=shortname');
	 }
?>