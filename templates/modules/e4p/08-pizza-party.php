
	<?php

	$fields = $exercise['form']['fields'];
	$button = $exercise['button'];

	//Figure out how many people
	$people = 4;
	//Figure out how many pizzas
	$pizzas = 2;
	//Figure out how many slices
	$slicesPerPizza = 8;


	//See if there was any user input

	if ( isset($_POST['submitted']) ) {

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

	<h2 class='title-voice'><?=$exercise['name']?></h2>

	<form method='POST'>

		<?php foreach($fields as $field) { ?>

			<field>
				<label class='form-text'><?=$field['label']?></label>
				<input type='<?=$field['label']?>' name='<?=$field['name']?>' min='<?=$field['min']?>' value='<?=$field['value']?>' required>
			</field>

		<?php } ?>

		<button class='form-button' type='<?=$button['type']?>' name='<?=$button['name']?>'><?=$button['text']?></button>

	</form>

	<output><?=$message?></output>
