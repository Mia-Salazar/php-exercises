<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cookie example</title>
</head>
<body>
	<?php
		session_start();
		if (!isset($_SESSION['USER'])) {
			$_SESSION['USER'] = "New session";
		} else {
			$_SESSION['USER'] = "Old session";
		}
		function isCookie() {
			$happy = "https://images.unsplash.com/photo-1618923850107-d1a234d7a73a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGNvb2tpZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60";
			$sad = "https://images.unsplash.com/photo-1622428051717-dcd8412959de?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80";
			if (!isset($_COOKIE['hungry'])) {
				$random = rand(0, 4);
				setcookie("hungry", true, time() + 5);
				setcookie("time", date('l jS \of F Y h:i:s A'), time() + 5);
				setcookie("random", $random, time() + 5);
				echo "
				<h3>There is a cookie and I'm hungry</h3>
				<img alt='' src='" . $happy . "' >" ;
			} else {
				setcookie('hungry','',time()-100);
				setcookie('time','',time()-100);
				setcookie('random','',time()-100);
				echo "
				<h3>There is any cookie and I'm hungry</h3>
				<img alt='' src='" . $sad . "' >" ;
			}
		}
	?>
	<h1>Type of session: <?php echo $_SESSION['USER'] ?></h1>
	<h2>Is there a cookie?</h2>
	<?php echo isCookie();?>
	<a href="session-2.php">Next page</a>

</body>
</html>