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
		include '11-query-insert.php';
		function getCountries() {
			$data = getCountriesData();
			foreach ($data as $row) {
				echo "<option value='" . $row["Code"] . "'>" . $row["Name"] . "</option>";
			};
		}
		function getDistricts() {
			$data = getDistrictsData();
			foreach ($data as $row) {
				echo "<option value='" . $row["district"] . "'>" . $row["district"] . "</option>";
			};
		}
	?>	
	<h1>Create new city</h1>
	<form method="get" action="11-view-added.php" style="display: flex;flex-direction: column;" id="form">
		<label for="name"> Name</label>
		<input id="name" placeholder="write name" name="name" type="text" />
		<label for="population">Population</label>
		<input id="population" placeholder="write population" name="population" type="number" min="0"/>
		<label for="date">Country</label>
		<select name="country" form="form">
			<?php getCountries() ?>
		</select>
		<label for="district">District</label>
		<select name="district" form="form">
			<?php getDistricts() ?>
		</select>
		<button class="button" type="submit">Send</button>
	</form>
</body>
</html>