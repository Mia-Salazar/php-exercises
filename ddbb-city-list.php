<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplo 1</title>
</head>
<body>

	<h1>List of cities</h1>
	<ul>
		<?php 
			include 'ddbb-query-list.php';
			$data = getCity();
			foreach ($data as $row) {
				echo "<li>" . $row["Name"] . ", " . $row["CountryCode"] . ", Population: " . $row["Population"] . "</li>";
			};
		?>	
	</ul>
</body>
</html>