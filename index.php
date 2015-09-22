<!DOCTYPE html>
<html>
<head>
	<title>xkcd Password Generator</title>
	<link rel="stylesheet" href="styles.css">
	<?php require "logic.php";?>
</head>
<body>
	<h1>Password Generator</h1>
	<div id="generator">

	<form method="GET" action="index.php">
		<div class="row">
		<label for="length">Number of words: </label>
			<input type="text" name="length" size="5">
		</div>
		<div class="row">
		<label for="number">Include a number: </label>
			<input type="hidden" name="number" value="off">
			<input type="checkbox" name="number"><br>
		</div>
		<div class="row">
		<label for="special">Include special character: </label>
			<input type="hidden" name="special" value="off">
			<input type="checkbox" name="special"><br>
		</div>
		<div class="row">
		<label for="hyphens">Separate with hyphens: </label>
			<input type="hidden" name="hyphens" value="off">
			<input type="checkbox" name="hyphens" checked><br>
		</div>

		<input type="submit" value="Generate Password">
	</form>

	<p id="display-password">Your new password is: 
		<strong><?php
			echo $password;
			//Add number to password if checked
			if($_GET["number"]=="on"){
				echo rand(0, 9);
			}
			//Add special character to password if checked
			if($_GET["special"]=="on"){
			echo $specials[array_rand($specials)];
			}
		?></strong>
	</p>
	</div>

	
	<a href="http://xkcd.com/936/"><img src="xkcd_password_strength.png" alt="A comic depicting the silliness of common password creation methods."></a>


</body>
</html>