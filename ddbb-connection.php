<?php  
	function createConnection($ddbb) {
		$host = "localhost";
		$username = "root";
		$password = "";
		$conection = mysqli_connect($host, $username, $password, $ddbb);
		if (!$conection) {
			die("<p>Error: " . mysqli_connect_error() . "</p>");
		}
		return $conection;
	}
	function closeConnection($connection) {
		mysqli_close($connection);
	}
?>