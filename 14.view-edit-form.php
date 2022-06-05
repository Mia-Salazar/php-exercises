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
		include '14-query-edit.php';
		$city = mysqli_fetch_assoc(getCityData($_GET['edit']));
		function getCountries($code) {
			$data = getCountriesData();
			foreach ($data as $row) {
				if ($row["Code"] === $code) {
					echo "<option selected=true value='" . $row["Code"] . "'>" . $row["Name"] . "</option>";
				} else {
					echo "<option value='" . $row["Code"] . "'>" . $row["Name"] . "</option>";
				}
			};
		}
		function getDistricts($district) {
			$data = getDistrictsData();
			foreach ($data as $row) {
				if ($row["district"] === $district) {
					echo "<option selected=true value='" . $row["district"] . "'>" . $row["district"] . "</option>";
				} else {
					echo "<option value='" . $row["district"] . "'>" . $row["district"] . "</option>";
				}
			};
		}
	?>	
	<h1>Edit city <?php echo $city["Name"] ?></h1>
	<form method="get" action="14-view-edited.php" style="display: flex;flex-direction: column;" id="form">
		<label for="name">Name</label>
		<input id="name" placeholder="write name" name="name" type="text" value=<?php echo $city["Name"] ?>>
		<label for="population">Population</label>
		<input id="population" placeholder="write population" name="population" type="number" min="0" value=<?php echo $city["Population"] ?>>
		<label for="date">Country</label>
		<select name="country" form="form">
			<?php getCountries($city["CountryCode"]) ?>
		</select>
		<label for="district">District</label>
		<select name="district" form="form">
			<?php getDistricts($city["District"]) ?>
		</select>
		<input type="hidden" name='id' value=<?php echo $city["ID"] ?>>
		<button class="button" type="submit">Send</button>
	</form>
</body>
</html>