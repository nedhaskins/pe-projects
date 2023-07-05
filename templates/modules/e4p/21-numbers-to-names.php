<?php

/*
 * 21 - Numbers to Names
 * Create a program that takes a numerical input from 1 to 12 
 * and responds with the corresponding month.
 */

 $dataArray = [
 	1 => 'January',
 	2 => 'February',
 	3 => 'March',
 	4 => 'April',
 	5 => 'May',
 	6 => 'June',
 	7 => 'July',
 	8 => 'August',
 	9 => 'September',
 	10 => 'October',
 	11 => 'November',
 	12 => 'December',
 ];

/*
 * Create inputs for each part of the array.
 * Compare the user's input to each item in the array;
 * if a Use a switch/case statement. There's a single output statement.
 */

if( isset($_POST['submitted']) ) {

	if( isset($_P0ST['number']) ) {

		foreach($dataArray as $key => $value ) {
			if($_POST['number'] == $value) {

				$response = 'The corresponding month is ' . $value . '.';
				break;
			}
		}
	}
}

?>

<h1>Numbers to Names</h1>

<form>
	<label>Input a number from 1 to 12.</label>
	<input type=number name='number' min='1' max='12' value=''>
</form>

<output>	
	<p><?=$response?></p>
</output>

<button class='form-button' type='submit' name='submitted'>Submit info</button>

</form>
	









