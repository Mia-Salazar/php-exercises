<?php
	require "7-ddbb-connection.php";
	function getCityData() {
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
	function deleteCity($id) {
		$DDBB = createConnection("world");
		$query = "DELETE FROM city WHERE ID = '" . $id . "'";
		$data = mysqli_query($DDBB, $query);
		if ($data) {
			return $data;
		} else {
			echo "Error";
		}
		closeConnection($DDBB);
	}
?>