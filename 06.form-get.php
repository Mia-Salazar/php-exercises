<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.button {
			background-color: gray;
			color:  white;
			appearance:  none;
			border:  none;
			margin-top:  20px;
			text-align: center;
			padding:  10px;
			cursor:  pointer;
			text-decoration: none;
		}
		.button:hover {
			background-color: black;
		}
		label {
			margin-top: 20px;
			margin-bottom: 5px;
		}
	</style>
</head>
<body>
	<form method="get" action="form-get-2.php" style="display: flex;flex-direction: column;" id="form">
		<label for="name">Name</label>
		<input id="name" placeholder="write your name" name="name" type="text" />
		<label for="age">Age</label>
		<input id="age" placeholder="write your birthday" name="age" type="number" min="18" max="100" />
		<label for="date">Birthday</label>
		<input id="date" placeholder="write your birthday" name="date" type="date" />
		<label for="date">Food</label>
		<select name="food" form="form">
			<option value="pizza">Pizza</option>
			<option value="chocolate">Chocolate</option>
			<option value="both">Both</option>
		</select>
		<div style="display: grid; grid-template-columns: 175px 175px 175px; grid-gap: 16px">
			<button class="button" type="submit">Send</button>
			<a class="button" type="submit" href="form-get-2.php?age=minor">I am underage</a>
			<a class="button" type="submit" href="form-get-2.php?age=elder">I am over 100 years old</a>
		</div>
	</form>
</body>
</html>