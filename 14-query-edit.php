<?php
	require "7-ddbb-connection.php";
	function getCitiesData() {
		$DDBB = createConnection("world");
		$query = "SELECT ID, Name FROM city ORDER BY Name ASC";
		$data = mysqli_query($DDBB, $query);
		if (mysqli_num_rows($data) > 0) {
			return $data;
		} else {
			echo "Error";
		}
		closeConnection($DDBB);
	}
	function getCityData($id) {
		$DDBB = createConnection("world");
		$query = "SELECT ID, Name, Population, CountryCode, District FROM city WHERE ID = '" . $id . "' ORDER BY Name ASC";
		$data = mysqli_query($DDBB, $query);
		if (mysqli_num_rows($data) > 0) {
			return $data;
		} else {
			echo "Error";
		}
		closeConnection($DDBB);
	}
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
	function editCity($id, $name, $code, $district, $population) {
		$DDBB = createConnection("world");
		$query = "UPDATE city SET Name = '" . $name . "'" .
				", CountryCode = '" . $code . "'" .
				", District = '" . $district . "'" . 
				", Population =" . $population . 
				" WHERE ID =" . $id;   
		$data = mysqli_query($DDBB, $query);
		if ($data) {
			return $data;
		} else {
			echo "Error";
		}
		closeConnection($DDBB);
	}
?>