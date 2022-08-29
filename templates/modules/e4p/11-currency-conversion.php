



<?php


//Get data from either the e4p.json or the styleguide.json.
//Data already exists in e4p.json.
//Styleguide can reflect the same data.


	$fields = $exercise['form']['fields'] ?? $section['form']['fields'];
	$button = $exercise['button'] ?? $section['button'];
	$name = $exercise['name'] ?? $section['name'];


$won = false;
$rate = 1324.35;
$dollars = false;
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

<h2 class='title-voice'><?=$name?></h1>

<form method='POST'>

<?php foreach($fields as $field) { ?>


	<field>
		<label class='form-text'><?=$field['label']?></label>
		<input  type='<?=$field['type']?>' name='<?=$field['name']?>' min='<?=$field['min']?>' value='<?=$won?>' step= '<?=$field['step']?>' >
	</field>

<?php } ?>

	<button class='form-button' type='<?=$button['type']?>' name='<?=$button['name']?>'><?=$button['text']?></button>
</form>

<output>
	
	<p>Exchanging ₩<?=$rounded_won?> at a rate of <?=$rate?> won/dollar.</p>
	<p>You will get $<?=$rounded_dollars?>.</p>

</output>

