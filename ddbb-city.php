<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplo 1</title>
</head>
<body>

	<h1>The city with ID = 1 is:</h1>

	<?php 
		include 'ddbb-query.php';
		$data = getCity();
		foreach ($data as $row) {
			echo "<h2>" . $row["Name"] . "</h2>";
		};
	?>
</body>
</html>