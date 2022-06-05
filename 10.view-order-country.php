<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplo 1</title>
</head>
<body>
	<h1>25 cities</h1>
	<form action="10-view-order-country.php" method="GET">
		<h2>Order by name: </h2>
		<input type="submit" name="order" value="ASC">
		<input type="submit" name="order" value="DESC">
	</form>
	<ul>
		<?php 
			include '10-query-order-country.php';
			if (!isset($_GET["order"])) {
				$data = getCountriesData("ASC");
			} else {
				$data = getCountriesData($_GET["order"]);
			}
			foreach ($data as $row) {
				echo "<li> <strong>" . $row["Name"] . "</strong>" . ", Continent: " . $row["Continent"] .  ", Population: " . $row["Population"] . "</li>";
			};

		?>	
	</ul>
</body>
</html>