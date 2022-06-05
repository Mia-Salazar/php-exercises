<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
	function checkVariable($param) {
		if(isset($_POST[$param])) {
			echo $_POST[$param];
		} else {
			echo "Undefined";
		}
	}
	?>
	<form method="post" action="form.php">
		<label for="name">Name</label>
		<input id="name"  placeholder="write your name" name="name" type="text" />
		<label for="password">Password</label>
		<input id="password"  placeholder="write your password" name="password" type="password" />
		<button type="submit">Enviar</button>
	</form>
	<h1>Name: <?php checkVariable('name') ?></h1>
	<h2>Password: <?php checkVariable('password') ?></h2>
</body>
</html>