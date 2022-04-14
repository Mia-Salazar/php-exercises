<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Random title</title>
</head>
<body>
	<?php 
		$title = "This is a title";
		$image = "https://xcjgames.com/assets/logo.png";
		$alt = "Alt text";
		$webXCJ = "xcjgames.com";
		$web = "miasalazar";
		$netflify = ".netlify.app";
	?>
	<h1><?php echo $title ?></h1>
	<?php 
		$subtitle = "This is a subtitle";
		echo "<h2>" . $subtitle . "</h2>";
	?>
	<figure style="max-width: 50%;">
		<img style="width: 100%;" src="<?php echo $image ?>" alt="<?php echo $alt ?>"/>
	</figure>
	<a target="_blank" href="<?php echo 'http://' . $web . $netflify ?>">Link to miasalazar.com</a>
	<a target="_blank" href="<?php echo 'https://' . $webXCJ ?>">Link to XCJ Games</a>

</body>
</html>