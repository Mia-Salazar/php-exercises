<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		$list = array(1,2,3,4);
		function getList($param) {
			foreach ($param as $value) {
				echo "<li>" . $value . "</li>";
			}
		}
		function sumNumbers($param) {
			$total = 0;
			foreach ($param as $value) {
				$total += $value;
			}
			return $total;
		}
	?>
	<ol>
		<?php
			echo getList($list);
		?>
	</ol>
	<h1>La suma de todos los números es <?php echo sumNumbers($list); ?></h1>


</body>
</html>