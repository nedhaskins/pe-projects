<!doctype html>

<?php

if( isset($_POST['submitted']) ) {

	if( isset($_POST['length']) ) {
		$length = (float)$_POST['length'] ?? 0; // null coalescing operator

		if(intval( $length ) > 0) {
		$hasLength = true;

		} else {
			$valueError =  "Please enter a value!";
		}
	}	

	if( isset($_POST['width']) ) {
		$width = (float)$_POST['width'];

		if ($width > 0) {
		$hasWidth = true;

		} else {
			$valueError =  "Please enter a value!";
		}
	}


	$area = $length * $width;

	$gallons = ceil($area / 360);
}

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<title></title>
</head>
<body>

</body>
</html>

<h1>#9 - Paint Calculator</h1>

<form method='POST'>
	<field>
		<label>What is the length of the room in square feet?</label>
		<input name='length' type='number' value='<?=$length?>' step= '0.01' min='0'>
	<?php if($valueError) { ?>
		<p class='error'><?=$valueError?></p>
	<?php } ?>
	</field>
	<field>
		<label>What is the width of the room in square feet?</label>
		<input name='width' type='number' value='<?=$width?>' step= '0.01' min='0'>
	<?php if($valueError) { ?>
		<p class='error'><?=$valueError?></p>
	<?php } ?>
	</field>

	<button type='submit' name='submitted'>How many gallons?</button>
</form>

<output>
	
	<p>You will need to purchase <?=$gallons?> gallons of paint to cover <?=$area?> square feet.</p>

</output>

