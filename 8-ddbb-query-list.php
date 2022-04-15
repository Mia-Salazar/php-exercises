<?php
	require "ddbb-connection.php";
	function getCity() {
		$DDBB = createConnection("world");
		$query = "SELECT Name, Population, CountryCode FROM city ORDER BY Name ASC";
		$data = mysqli_query($DDBB, $query);
		if (mysqli_num_rows($data) > 0) {
			return $data;
		} else {
			echo "Error";
		}
		closeConnection($DDBB);
	}
?>
