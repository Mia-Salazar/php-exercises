<?php
	require "7-ddbb-connection.php";
	function getCountriesData($order) {
		$DDBB = createConnection("world");
		$query = "SELECT Name, Continent, Population FROM country ORDER BY Name " . $order . " LIMIT 25";
		$data = mysqli_query($DDBB, $query);
		if (mysqli_num_rows($data) > 0) {
			return $data;
		} else {
			echo "Error";
		}
		closeConnection($DDBB);
	}
?>