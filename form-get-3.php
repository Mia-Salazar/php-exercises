<?php
	function getAge($number) {
		if(is_numeric($number)) {
			echo $number;
		} else {
			if($number === "minor") {
				echo "You are minor";
			} else {
				echo "You are too old";
			}
		}
	}
	function getName($number, $name) {
		if (is_numeric($number)) {
			echo "<h1>" . $name . "</h1>";
		}
	}
	function getBirthday($number, $date) {
		if (is_numeric($number)) {
			echo "<h3>" . $date . "</h3>";
		}
	}

	function getFood($number, $food) {
		if (is_numeric($number)) {
			switch ($food) {
				case 'pizza':
					echo "You only want pizza";
					break;
				case 'chocolate':
					echo "You only want chocolate";
					break;
				case 'both':
					echo "You want pizza AND chocolate";
			}
		}
	}
?>