
<?php


	$fields = $exercise['form']['fields'];
	$button = $exercise['button'];

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

<h2 class='title-voice'><?=$exercise['name']?></h1>

<form method='POST'>

	<?php foreach ($fields as $field) { ?>

		<field>
			<label class='form-text'><?=$field['label']?></label>
			<input type='<?=$field['type']?>' name='<?=$field['name']?>' min='<?=$field['min']?>' value='<?=$field['value']?>' step= '<?=$field['step']?>'>
			<?php if($valueError) { ?>
				<p class='error'><?=$valueError?></p>
			<?php } ?>
		</field>

	<?php } ?>

	<button class='form-button' type='<?=$button['type']?>' name='<?=$button['name']?>'><?=$button['text']?></button>
</form>

<?php if($length && $width) { ?>

<output>
	
	<p>You will need to purchase <?=$gallons?> gallons of paint to cover <?=$area?> square feet.</p>

</output>

<?php } ?>

