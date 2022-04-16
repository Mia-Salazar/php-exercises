<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	</style>
</head>
<body>
	<?php 
		include '14-query-edit.php';
		function getCountriesSelect() {
			$data = getCitiesData();
			foreach ($data as $row) {
				echo 
					"<li style='display: flex; justify-content: space-between; margin: 10px 0'>" . $row["Name"] . "
						<a href='14-view-edit-form.php?edit=" . $row["ID"] . "'> Edit </a>
					</li>"
				;
			};
		}
	?>	
	<h1>Edit city</h1>
	<ul style="max-width: 30%">
		<?php getCountriesSelect() ?>
	</ul>
</body>
</html>