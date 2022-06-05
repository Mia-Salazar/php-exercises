<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		include '11-query-insert.php';
		if(addCity($_GET['name'], $_GET['country'], $_GET['district'], $_GET['population'])){
			echo "
				<h1>New city added</h1>
				<ul>
					<li> Name: " . $_GET['name'] . "</li>
					<li> Country: " . $_GET['country'] . "</li>
					<li> District: " . $_GET['district'] . "</li>
					<li> Population: " . $_GET['population'] . "</li>
				</ul>
			";

		} else {
			echo "<h1>Error when adding new city</h1>";
		}
	?>	
</body>
</html>