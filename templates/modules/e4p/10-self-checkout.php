<!doctype html>

<?php

if( isset($_POST['submitted']) ) {

	if( isset($_POST['price-1']) ) {
		$price1 = (float)$_POST['price-1'] ?? 0; // null coalescing operator

		if(intval( $price1 ) > 0) {
		$hasPrice1 = true;

		} else {
			$valueError =  "Please enter a value!";
		}
	}	

	if( isset($_POST['price-2']) ) {
		$price2 = (float)$_POST['price-2'];

		if ($price2 > 0) {
		$hasPrice2 = true;

		} else {
			$valueError =  "Please enter a value!";
		}
	}

	if( isset($_POST['price-3']) ) {
		$price3 = (float)$_POST['price-3'];

		if ($price3 > 0) {
		$hasPrice3 = true;

		} else {
			$valueError =  "Please enter a value!";
		}
	}

	$subtotal = $price1 + $price2 + $price3;
	$rounded_subtotal = number_format($subtotal, 2, '.', ',');

	$tax = $subtotal * 0.055;
	$rounded_tax = number_format($tax, 2, '.', ',');

	$total = $subtotal + $tax;
	$rounded_total = number_format($total, 2, '.', ',');
}

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/site.css">
	<title></title>
</head>
<body>

</body>
</html>

<h1>#10 - Self Checkout</h1>

<form method='POST'>
	<field>
		<label>Enter the price of item 1.</label>
		<input name='price-1' type='number' value='<?=$price1?>' step= '0.01' min='0'>
	<?php if($valueError) { ?>
		<p class='error'><?=$valueError?></p>
	<?php } ?>
	</field>

	<field>
		<label>Enter the price of item 2.</label>
		<input name='price-2' type='number' value='<?=$price2?>' step= '0.01' min='0'>
	<?php if($valueError) { ?>
		<p class='error'><?=$valueError?></p>
	<?php } ?>
	</field>

	<field>
		<label>Enter the price of item 3.</label>
		<input name='price-3' type='number' value='<?=$price3?>' step= '0.01' min='0'>
	<?php if($valueError) { ?>
		<p class='error'><?=$valueError?></p>
	<?php } ?>
	</field>
	
	
	

	<button type='submit' name='submitted'>Calculate total</button>
</form>

<?php if($subtotal && $tax && $total) { ?>
	<output>
		<p>Subtotal: $<?=$rounded_subtotal?></p>
		<p>Tax: $<?=$rounded_tax?></p>
		<p>Total: $<?=$rounded_total?></p>
	</output>
<?php } ?>