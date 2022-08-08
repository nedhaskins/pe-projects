<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href='css/style.css'>
</head>


<body>

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

<form method='POST'>

	<h1>Berry Count-O-Matic</h1>

	<field>

		<label>Number of guests</label>
		<input type='number' name='guests' value='<?=$guests?>'> <!--the "name" attribute is pointing to the actual "name" that this is going to be referred to elsewhere in the code, like in CSS for styling, and in the resulting array when data is entered by the user -->

	</field>

	<field>

		<label>Berries per guest</label>
		<input type='number' name='berries' value='<?=$berries?>'>

	<!--when the form comes back after a $_POST, the values will have the previous values in there already. -->

	</field>


	<button type='submit' name='submitted'>Submit
	</button>

</form>