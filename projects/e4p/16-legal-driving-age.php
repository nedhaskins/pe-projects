



<?php
$age = 0;

if( isset($_POST['submitted']) ) {

	if( isset($_POST['age']) ) {
		$age = (float)$_POST['age'] ?? 0; // null coalescing operator

		if($age > 0) {
		$hasAge = true;

		} else {
		$valueError = "Please enter a valid age...";
		}
	}	
}

?>

<!doctype html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>#16 - Legal Driving Age</h1>

<form method='POST'>
	<field>
		<label>What is your age?</label>
		<input name='age' type='number' value='<?=$sage?>'>

		<?php if($valueError) { ?>
			<p class='error'><?=$valueError?></p>
		<?php } ?>
		
	</field>
	<button type='submit' name='submitted'>Submit info</button>
</form>



<?php

if($age > 0) {

$response = $age >= 16 ? "You get a pass." : "Sorry, you're not old enough.";

?>

<output>
	<p><?=$response?></p>
</output>

<?php } ?>

</body>
</html>

