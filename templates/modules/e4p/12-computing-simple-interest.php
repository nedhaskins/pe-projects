


<?php

	$fields = $exercise['form']['fields'];
	$button = $exercise['button'];


$valueError = false;
$principal = false;
//no variables need to be defined in this space.  They will be created when there's a $_POST value.


if( isset($_POST['submitted']) ) {


	if( isset($_POST['principal']) ) {
		$principal = (float)$_POST['principal'] ?? 0; // null coalescing operator

		if($principal > 0) {
		$hasPrincipal = true;

		} else {
		$valueError = "Please enter a value!";
		}
	}	

	if( isset($_POST['rate']) ) {
		$rate = (float)$_POST['rate'];
		if ($rate > 0) {
			$hasRate = true;
		} else {
		$valueError = "Please enter a value!";
		}
	}


	if( isset($_POST['years']) ) {
		$years = (float)$_POST['years'];

		if ($years > 0) {
		$hasYears = true;

		} else {
		$valueError = "Please enter a value!";
		}

	}

	$percentageRate = $rate / 100;

	$futureValue = $principal * (1 + ($percentageRate * $years));


	$roundedPrincipal = number_format($principal, 2, '.', ',');

	$roundedFinal = number_format($futureValue, 2, '.', ',');

}

?>

<h2 class='title-voice'><?=$exercise['name']?></h1>



<form method='POST'>

	<?php foreach($fields as $field) { ?>

	<field>
		<label><?=$field['label']?></label>
		<input  type='<?=$field['type']?>' name='<?=$field['name']?>' min='<?=$field['min']?>' value='<?=$principal?>' step= '<?=$field['step']?>' >

		<?php if($valueError) { ?>
				<p class='error'><?=$valueError?></p>
		<?php } ?>
		
	</field>

<?php } ?>

	<button type='<?=$button['type']?>' name='<?=$button['name']?>'><?=$button['text']?></button>
</form>



<?php if($principal && $rate && $years) { ?>

<output>
	


	<p>The principal amount is $<?=$roundedPrincipal?>.</p>
	<p>The interest rate is <?=$rate?>%.</p>
	<p>After <?=$years?> years at <?=$rate?>%, the value of the principal will be $<?=$roundedFinal?>.</p>

</output>

<?php } ?>
