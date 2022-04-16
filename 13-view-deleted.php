<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>	
	<?php
	include '13-query-delete.php';
		if(isset($_POST['delete'])) {
			if (deleteCity($_POST['id'])) {
				echo "<h1> City with id: " . $_POST['id'] . " deleted </h1>";
			}
		} else {
			echo "No city deleted yet";
		}
	?>
</body>
</html>