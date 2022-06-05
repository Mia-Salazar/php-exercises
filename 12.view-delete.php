<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<style>
		.button {
			background-color: gray;
			color:  white;
			appearance:  none;
			border:  none;
			margin-top:  20px;
			text-align: center;
			padding:  10px;
			cursor:  pointer;
			text-decoration: none;
		}
		.button:hover {
			background-color: black;
		}
		label {
			margin-top: 20px;
			margin-bottom: 5px;
		}
	</style>
</head>
<body>
	<?php 
		include '12-query-delete.php';
		function getCountriesSelect() {
			$data = getCityData();
			foreach ($data as $row) {
				echo "<option value='" . $row["ID"] . "'>" . $row["Name"] . "</option>";
			};
		}
	?>	
	<h1>Delete city</h1>
	<form method="get" action="12-view-delete.php" style="display: flex;flex-direction: column;" id="form">
		<label for="city">Choose city</label>
		<select name="city" form="form">
			<?php getCountriesSelect() ?>
		</select>
		<button class="button" type="submit">Delete</button>
	</form>
	<?php
		if(isset($_GET['city'])) {
			deleteCity($_GET['city']);
		} else {
			echo "No city deleted yet";
		}
	?>
</body>
</html>