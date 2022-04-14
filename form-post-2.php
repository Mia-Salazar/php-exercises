<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
		function checkPassword() {
			$length = strlen($_POST['password']);
			echo str_repeat("*", $length);
		}
	?>
	<h1>Your data is</h1>
	<h2>Name: <?php echo $_POST['name'] ?></h2>
	<h2>Password: <?php checkPassword() ?></h2>
	<a href="form-post.php">Go back</a>
</body>
</html>