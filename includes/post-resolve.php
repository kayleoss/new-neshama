<?php 
	include "../layouts/head.php";
	include_once "../includes/db.php";
	if (isset($_POST['input']) && strlen($_POST['input']) >= 10 && strlen($_POST['input']) < 8000 )  {
	 	$text = '"' . mysqli_real_escape_string($conn, $_POST['input']) . '"';
	 	$sql = "INSERT INTO posts (text) VALUES ('$text')";
      	mysqli_query($conn, $sql);
      	header('Location: /pages/hub?success#posts');
	 } else if (isset($_POST['input']) && strlen($_POST['input']) < 10) {
	 	header('Location: /pages/hub?failure=short');
	 } else if (isset($_POST['input']) && strlen($_POST['input']) >= 8000) {
	 	header('Location: /pages/hub?failure=long');
	 }
?>