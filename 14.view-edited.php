<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>	
	<?php
	include '14-query-edit.php';
		if(isset($_GET['id'])) {
			if (editCity($_GET['id'], $_GET['name'], $_GET['country'], $_GET['district'], $_GET['population'])) {
				echo "<h1> City with id: " . $_GET['id'] . " edited </h1>";
			}
		} else {
			echo "No edited city";
		}
	?>
</body>
</html>