<?php 
	include 'conect.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
	<title>Test #001</title>
</head>
<body>


	<div class="container">
		<div class="row">
			<form action="submit.php" method="POST" class="form-group">
				
			<input type="text" placeholder="Login..." name="login" required>
			<input type="text" placeholder="Password..." name="pass" required>
			<button type="submit" class="btn btn-primary btn-round">Submit</button>
		</div>
	</div>

</form>





</body>
</html>