



<?php

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

<!doctype html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="../css/site.css">
</head>
<body>

<h1>#13 - Determining Compound Interest</h1>

<form method='POST'>
	<field>
		<label>Enter the principal amount.</label>
		<input name='principal' type='number' value='<?=$principal?>' step= '0.01' min='0'>

		<?php if($valueError) { ?>
			<p class='error'><?=$valueError?></p>
		<?php } ?>
		
	</field>

	<field>
		<label>Enter the interest rate (%).</label>
		<input name='rate' type='number' value='<?=$rate?>' step= '0.01' min='0'>

		<?php if($valueError) { ?>
			<p class='error'><?=$valueError?></p>
		<?php } ?>
	</field>

	<field>
		<label>Enter the number of years.</label>
		<input name='years' type='number' value='<?=$years?>' step= '0.01' min='0'>

		<?php if($valueError) { ?>
			<p class='error'><?=$valueError?></p>
		<?php } ?>
	</field>

	<field>
		<label>Enter the number of compoundings per year.</label>
		<input name='compounds' type='number' value='<?=$compounds?>' step= '0.01' min='0'>

		<?php if($valueError) { ?>
			<p class='error'><?=$valueError?></p>
		<?php } ?>
	</field>


	<button type='submit' name='submitted'>Submit info</button>
</form>



<?php if($principal && $rate && $years && $compounds) { ?>

<output>
	
<p>$<?=$roundedPrincipal?> invested at <?=$rate?>% for <?=$years?> years compounded <?=$compounds?> times per year is $<?=$roundedFinal?>.

</output>

<?php } ?>

</body>
</html>

