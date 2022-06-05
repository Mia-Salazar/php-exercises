<?php
	require "7-ddbb-connection.php";
	function getCity() {
		$DDBB = createConnection("world");
		$query = "SELECT ID, Name, CountryCode FROM city ORDER BY Name ASC LIMIT 10";
		$data = mysqli_query($DDBB, $query);
		if (mysqli_num_rows($data) > 0) {
			return $data;
		} else {
			echo "Error";
		}
		closeConnection($DDBB);
	}
	function getLanguage($id) {
		$DDBB = createConnection("world");
		$query = "SELECT Language, IsOfficial FROM countrylanguage WHERE CountryCode = '" . $id . "';";
		$data = mysqli_query($DDBB, $query);
		if (mysqli_num_rows($data) > 0) {
			return $data;
		} else {
			echo "Error";
		}
		closeConnection($DDBB);
	}
	function getCountryName($id) {
		$DDBB = createConnection("world");
		$query = "SELECT Name FROM country WHERE Code = '" . $id . "';";
		$data = mysqli_query($DDBB, $query);
		if (mysqli_num_rows($data) > 0) {
			return $data;
		} else {
			echo "Error";
		}
		closeConnection($DDBB);
	}
?>
