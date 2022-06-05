<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page 2</title>
</head>
<body>
	<?php
		if(isset($_COOKIE['time']) && isset($_COOKIE['random'])) {
			$time = $_COOKIE['time'];
			$random = $_COOKIE['random'];
		} else {
			$time = "Nop";
			$random = "Nop";
		}
		function repeat($number) {
			for ($i = 0; $i <= $number; $i++) {
			    echo "<li> Repeat </li>";
			}
		}
	?>
	<h1>Cookie was created at <?php echo $time ?></h1>
	<ol>
		<?php echo repeat($random) ?>
	</ol>

</body>
</html>