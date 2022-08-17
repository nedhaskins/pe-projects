
<?php

$valueError = false;
$length = false;

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

<h2 class='title-voice'>#9 - Paint Calculator</h1>

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

<?php if($length && $width) { ?>

<output>
	
	<p>You will need to purchase <?=$gallons?> gallons of paint to cover <?=$area?> square feet.</p>

</output>

<?php } ?>

