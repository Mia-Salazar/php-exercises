<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	</style>
</head>
<body>
	<?php 
		include '12-query-delete.php';
		function getCountriesSelect() {
			$data = getCityData();
			foreach ($data as $row) {
				echo "
					<li style='display: flex; justify-content: space-between; margin: 10px 0'>" . $row["Name"] . "
						<form method='post' action='13-view-deleted.php' style=''>
							<input type='hidden' name='id' value='" . $row["ID"] . "'>
							<input type='submit' name='delete' value='delete' style='background-color: #fabada; border: none; border-radius: 5px; padding: 5px 15px'>
						</form>
					</li>
				";
			};
		}
	?>	
	<h1>Delete city</h1>
	<ul style="max-width: 30%">
		<?php getCountriesSelect() ?>
	</ul>
</body>
</html>