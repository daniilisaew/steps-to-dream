<?php
include 'conect.php';
include 'test.php';




if (!empty($_POST['login']) AND !empty($_POST['pass'])) 
	{
	$loginhash = md5($_POST['login']);	
	$passhash = md5($_POST['pass']);
$query = "INSERT INTO test (login, pass) VALUES('$loginhash', '$passhash')";
$result = mysqli_query($mysql, $query);


	  header("Location: /test/test.php");
 }

 ?>