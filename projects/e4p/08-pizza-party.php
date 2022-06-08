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

		$people = 0;
		$pizzas = 0;

		if ( isset($_POST['submit']) ) {
			
			if ( isset ($_POST['people']) ) {
				$people = $_POST['people'];
				if ($people >= 0) {
				$people = $_POST['people'];
				}
			}

			if ( isset ($_POST['pizzas']) ) {
				if ($pizzas >= 0) {
				$pizzas = $_POST['pizzas'];
				}
			}
		}

	?>


	<form method='POST'>

		<h1>Exercise 8 - Pizza Party</h1>

		<field>
			<label>How many people are at the party?</label>
			<input type='number' name='people' min='1'>
		</field>

		<field>
			<label>How many pizzas are there?</label>
			<input type='number' name='pizzas'min='1'>
		</field>

		<button type='submit' name='submit'>Submit</button>

	</form>




	<?php

		$pizzaSlices = $pizzas * 8;
	//the number of slices in a pizza

		$sliceShare = $pizzaSlices / $people;
	//the number of slices each person gets

		if ($sliceShare % 2 == 0) {
			$sliceShare = floor($sliceShare);
		}

		$remainder = $pizzaSlices - ($people * $sliceShare);

		//Order here is very important -- the remainder variable has to be defined AFTERWARD because we have to floor the number of slices first to HAVE a remainder.

		if ($people == 1) {
			echo "<p class='output'>There is 1 person at the party.</p>";
		} else {
			echo "<p class='output'>There are " . $people . " people at the party.</p>";
		}

		if ($pizzas == 1) {
			echo "<p class='output'>There is 1 pizza.</p>";
		} else {
			echo "<p class='output'>There are " . $pizzas . " pizzas.</p>";
		}

		echo "<p class='output'>Each person gets " . $sliceShare . " slices.</p>";

		echo "<p class='output'>There are " . $remainder . " slices left over.</p>";
	?>



</body>
</html>

