<?php
	require "7-ddbb-connection.php";
	function getCountriesData() {
		$DDBB = createConnection("world");
		$query = "SELECT Name, Code FROM country ORDER BY Name ASC";
		$data = mysqli_query($DDBB, $query);
		if (mysqli_num_rows($data) > 0) {
			return $data;
		} else {
			echo "Error";
		}
		closeConnection($DDBB);
	}

	function getDistrictsData() {
		$DDBB = createConnection("world");
		$query = "SELECT DISTINCT district FROM city ORDER BY district ASC";
		$data = mysqli_query($DDBB, $query);
		if (mysqli_num_rows($data) > 0) {
			return $data;
		} else {
			echo "Error";
		}
		closeConnection($DDBB);
	}
	function addCity($name, $code, $district, $population) {
		$DDBB = createConnection("world");
		$query = "INSERT INTO city (Name, CountryCode, District, Population) 
				VALUES ('$name', '$code', 'district', '$population')";  
		$data = mysqli_query($DDBB, $query);
		if ($data) {
			return $data;
		} else {
			echo "Error";
		}
		closeConnection($DDBB);
	}
?>