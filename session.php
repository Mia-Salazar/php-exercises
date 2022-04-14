<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cookie example</title>
</head>
<body>
	<?php
		session_start();
		if (!isset($_SESSION['USER'])) {
			$_SESSION['USER'] = "New session";
		} else {
			$_SESSION['USER'] = "Old session";
		}
	?>
	<h1>Type of session: <?php echo $_SESSION['USER'] ?></h1>

</body>
</html>