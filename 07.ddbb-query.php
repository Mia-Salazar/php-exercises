<?php
	require "7-ddbb-connection.php";
	function getCity() {
		$DDBB = createConnection("world");
		$query = "SELECT Name FROM city WHERE ID = 1";
		$data = mysqli_query($DDBB, $query);
		if (mysqli_num_rows($data) > 0) {
			return $data;
		} else {
			echo "There is no city with ID = 1";
		}
		closeConnection($DDBB);
	}
?>
