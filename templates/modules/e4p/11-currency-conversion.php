
<?php

	$fields = $exercise['form']['fields'];
	$button = $exercise['button'];



$won = 30000000000;
$rate = 1324.35;
$dollars = 0;
$rounded_won = 0;
$rounded_dollars = 0;

$hasWonValue = false;
$hasRate = false;

if( isset($_POST['submitted']) ) {

	if( isset($_POST['won']) ) {
		$won = (float)$_POST['won'] ?? 0; // null coalescing operator

		if(intval( $won ) > 0) {
		$hasWonValue = true;

		} else {
			echo "Please enter a won amount.";
		}
	}	

	if( isset($_POST['rate']) ) {
		$rate = (float)$_POST['rate'];

		if ($rate > 0) {
		$hasRate = true;

		} elseif ($rate == 0) {
			echo "Can't divide by 0!";

		} else {
			echo "Please enter a valid rate amount.";
		}
	}

	if($rate != 0) {
		$dollars = $won / $rate;
	}

	$rounded_won = number_format($won, 2, '.', ',');

	$rounded_dollars = number_format($dollars, 2, '.', ',');

}
?>

<h2 class='title-voice'><?=$exercise['name']?></h1>

<form method='POST'>

<?php foreach($fields as $field) { ?>


	<field>
		<label><?=$field['label']?></label>
		<input  type='<?=$field['type']?>' name='<?=$field['name']?>' min='<?=$field['min']?>' value='<?=$won?>' step= '<?=$field['step']?>' >
	</field>

<?php } ?>

	<button type='<?=$button['type']?>' name='<?=$button['name']?>'><?=$button['text']?></button>
</form>

<output>
	
	<p>Exchanging ₩<?=$rounded_won?> at a rate of <?=$rate?>.</p>
	<p>You will get $<?=$rounded_dollars?>.</p>

</output>

