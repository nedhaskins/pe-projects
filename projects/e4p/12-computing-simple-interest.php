
<!doctype html>

<?php

$principal = 0;
$interestRate = 0;
$years = 0;
$valueError = false;

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


<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>#12 - Computing Simple Interest</h1>

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

	<button type='submit' name='submitted'>Submit info</button>
</form>



<?php if($principal && $rate && $percentageRate) { ?>

<output>
	


	<p>The principal amount is $<?=$roundedPrincipal?>.</p>
	<p>The interest rate is <?=$rate?>%.</p>
	<p>After <?=$years?> years at <?=$rate?>%, the value of the principal will be $<?=$roundedFinal?>.

</output>

<?php } ?>

</body>
</html>

