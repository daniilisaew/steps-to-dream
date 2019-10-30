<?php


if (!empty($_POST['login']) AND !empty($_POST['pass'])) 
	{

	$login = $_POST['login'];	
	$passhash = md5($_POST['pass']);


$clogin = mysqli_real_escape_string($mysql, $login);
$cpass - mysqli_real_escape_string($mysql, $passhash);

$query = "INSERT INTO test (login, pass) VALUES('$clogin', '$cpass')";
$result = mysqli_query($mysql, $query);


	  header("Location: /test/test.php");
 }

 ?>
