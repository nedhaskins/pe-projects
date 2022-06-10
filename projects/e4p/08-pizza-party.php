<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href='css/style.css'>
		<title></title>
	</head>
	
<body>

	<?php
	//Figure out how many people
	$people = 4;
	//Figure out how many pizzas
	$pizzas = 2;
	//Figure out how many slices
	$slicesPerPizza = 8;


	//See if there was any user input

	if ( isset($_POST['submit']) ) {

			//Assess any new values

		if ( isset ($_POST['people']) ) {
			$people = $_POST['people'];
		}

		if ( isset ($_POST['pizzas']) ) {
			$pizzas = $_POST['pizzas'];
		}
	}


	//Do calculations
	$totalSlices = $pizzas * $slicesPerPizza;
	$remainder = $totalSlices % $people; //look at how the modulo works here!
	$slicesPerPerson = ($totalSlices - $remainder) / $people;

	//The way this code works, you didn't need to use the floor() function....you used the modulo to get the remainder.

	//x = (160-  (160 % 85)) / 85

	// = (160-75) / 85


	//Create message
	$message = "There are $slicesPerPerson slices per person and $remainder slices left over.";



	//Display message



	?>


	<form method='POST'>

		<h1>Exercise 8 - Pizza Party</h1>

		<field>
			<label>How many people are at the party?</label>
			<input type='number' name='people' min='1' value='<?php echo $people; ?>' required> <!--the 'required' requires input to move forward! -->
		</field>

		<field>
			<label>How many pizzas are there?</label>
			<input type='number' name='pizzas'min='1' value="<?=$pizzas?>" required>
		</field>

		<button type='submit' name='submit'>Submit</button>

	</form>




	<?php

	echo $message;

?>

</body>
</html>

