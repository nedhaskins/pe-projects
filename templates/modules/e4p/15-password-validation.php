<!-- //Compare user input to a known password value
//Input string must match given variable exactly; including cases, spaces, etc
//Define a variable
//USE an if-else statement
//if user input matches


//Variable that contains password value

//Variable that corresponds to user input


//Variable 
 -->








<?php

function showErrors() {
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
}
showErrors();

$output = false;

const password = "jetplane";

if ( isset($_POST['submitted']) ) {

	if ( isset($_POST['userEntry']) ) {
		$userEntry = $_POST['userEntry'];
	}

	if($userEntry === password) {
		$output = "You got it :D";
	} else {
		$output = "Not the one we need brah :/";
	}
}
	
?>

<form method="POST">
	<div class="field">
		<p>Please enter the password.</p>
		<label>password</label>
		<input name="userEntry" value="" placeholder="..." required>
	</div>

	<button type="submit" name="submitted">Submit</button>
</form>

<output><?=$output?></output>











