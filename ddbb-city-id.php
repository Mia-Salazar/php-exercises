<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplo 1</title>
</head>
<body>
	<?php
		include 'ddbb-query-inner-join.php';
		function getLanguageByCity($id) {
			$langs = getLanguage($id);
			$result = "<ul>";
			foreach ($langs as $row) {
				$result .= "<li>" . $row["Language"] . ", " . isItOfficial($row["IsOfficial"]) . "</li>";
			}
			$result .= "</ul>";
			return $result;
		}
		function isItOfficial($official) {
			if($official === "T") {
				return "Official Language";
			} else {
				return "No Official Language";
			}
		}
		function getCountryNameFn($id) {
			$name = getCountryName($id);
			foreach ($name as $row) {
				return $row["Name"];
			}
		}
	?>

	<h1>List of cities</h1>
	<ul>
		<?php 
			$data = getCity();
			foreach ($data as $row) {
				echo "<li>" . $row["Name"] . ", " . getCountryNameFn($row["CountryCode"]) . ", Languages:" . getLanguageByCity($row["CountryCode"]) . "</li>";
			};
		?>	
	</ul>
</body>
</html>