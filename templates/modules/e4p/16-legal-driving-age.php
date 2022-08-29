



<?php

	$field = $exercise['form']['field'];
	$button = $exercise['button'];





$age = 0;
$valueError = false;

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

<h2 class='title-voice'><?=$exercise['name']?></h1>

<form method='POST'>
	<field>
		<label class='form-text'><?=$field['label']?></label>
		<input type='<?=$field['type']?>' name='<?=$field['name']?>'  value='<?=$field['value']?>'>

		<?php if($valueError) { ?>
			<p class='error'><?=$valueError?></p>
		<?php } ?>
		
	</field>
	<button class='form-button' type='submit' name='submitted'>Submit info</button>
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

