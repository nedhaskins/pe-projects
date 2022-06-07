<?php 

//$stuff = $_POST;  //$stuff will be where all the submitted stuff from the form lives on the server


//print_r($stuff);
//var_dump($stuff); //these two functions do the same thing

$guests = 0;
$berries = 0;


	if ( isset($_POST["submitted"]) ) {
		
		if ( isset($_POST["guests"]) ) {
			if ( $_POST["guests"] >= 0 ) {
			$guests = $_POST["guests"];
			}
		} 

		if ( isset($_POST["berries"]) ){
			if ( $_POST["berries"] >= 0 ) {
			$berries = $_POST["berries"];
			}
		}

		//The two variables, $guests and $berries, have been defined above.  They are no longer undefined.

		//T

	$total = floatval($guests) * floatval($berries);

	echo "<p class='feedback'>$total</p>";

	//By putting strings inside elements they can be styled later.

	} 







?>


<style>
	
	label, input, button {
		border: 3px solid red;
	}

	label, input {
		display: block; /*just setting these up as block-level
		elements instead of inline-block*/
	}

	form {
		max-width: 400px;
		border: 1px solid green;
	}

	.field {
		border: 3px solid blue;
		display: flex;
		flex-direction: column;
	}
 
	.field label {
		font-size: 14px;
		margin-bottom: 4px;
	}

	button[type="submit"], .field + .field {
		margin-top: 10px ;
	}

	.feedback {
		color: lime;
	}


</style>

<form method='POST'>

	<p>Berry Count-O-Matic</p>


	<div class='field'>

		<label>Number of guests</label>
		<input type='number' name='guests' value='<?=$guests?>'> <!--the "name" attribute is pointing to the actual "name" that this is going to be referred to elsewhere in the code, like in CSS for styling, and in the resulting array when data is entered by the user -->

	</div>

	<div class='field'>

		<label>Berries per guest</label>
		<input type='number' name='berries' value='<?=$berries?>'>

	<!--when the form comes back after a $_POST, the values will have the previous values in there already. -->

	</div>


	<button type='submit' name='submitted'>Submit
	</button>

</form>