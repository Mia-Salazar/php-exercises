<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php include 'form-get-3.php'; ?>

	<?php echo getName($_GET['age'], $_GET['name']) ?>
	<h2><?php echo getAge($_GET['age']) ?></h2>
	<?php echo getBirthday($_GET['age'], $_GET['date']) ?>
	<?php echo getFood($_GET['age'], $_GET['food'] ) ?>
</body>
</html>