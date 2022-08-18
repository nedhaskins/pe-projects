



<?php


	$fields = $exercise['form']['fields'];
	$button = $exercise['button'];


$valueError = false;
$principal = 0;
$rate = 0;
$years = 0;
$compounds = 0;



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

	if( isset($_POST['compounds']) ) {
		$compounds = (float)$_POST['compounds'];

		if ($compounds > 0) {
		$hasCompounds = true;

		} else {
		$valueError = "Please enter a value!";
		}
	}


	if($compounds != 0) {


	$percentageRate = $rate / 100;

	$futureValue = $principal * pow(1 +($percentageRate / $compounds), $compounds * $years);

	$roundedPrincipal = number_format($principal, 2, '.', ',');

	$roundedFinal = number_format($futureValue, 2, '.', ',');
}

}

?>

<h2 class='title-voice'><?=$exercise['name']?></h1>

<form method='POST'>

	<?php foreach($fields as $field) { ?>

	<field>
		<label><?=$field['label']?></label>
		<input  type='<?=$field['type']?>' name='<?=$field['name']?>' min='<?=$field['min']?>' value='0' step= '<?=$field['step']?>' >

		<?php if($valueError) { ?>
				<p class='error'><?=$valueError?></p>
		<?php } ?>
		
	</field>

<?php } ?>

	<button type='<?=$button['type']?>' name='<?=$button['name']?>'><?=$button['text']?></button>
</form>



<?php if($principal && $rate && $years && $compounds) { ?>

<output>
	
<p>$<?=$roundedPrincipal?> invested at <?=$rate?>% for <?=$years?> years compounded <?=$compounds?> times per year is $<?=$roundedFinal?>.

</output>

<?php } ?>
