<?php

	$fields = $exercise['form']['fields'];
	$button = $exercise['button'];


$valueError = false;
$subtotal = false;

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

<h2 class='title-voice'><?=$exercise['name']?></h1>

<form method='POST'>

	<?php foreach ($fields as $field) { ?>

	<field>
		<label class='form-text'><?=$field['label']?></label>
		<input type='<?=$field['type']?>' name='<?=$field['name']?>' min='<?=$field['min']?>' value='<?=$price1?>' step= '<?=$field['step']?>'>
		<?php if($valueError) { ?>
			<p class='error'><?=$valueError?></p>
		<?php } ?>
	</field>

	<?php } ?>

	<button class='form-button' type='submit' name='submitted'>Calculate total</button>
</form>

<?php if($subtotal && $tax && $total) { ?>
	<output>
		<p>Subtotal: $<?=$rounded_subtotal?></p>
		<p>Tax: $<?=$rounded_tax?></p>
		<p>Total: $<?=$rounded_total?></p>
	</output>
<?php } ?>