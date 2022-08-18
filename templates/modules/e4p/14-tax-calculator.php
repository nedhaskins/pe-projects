<?php


	$fields = $exercise['form']['fields'];
	$button = $exercise['button'];



$tax = 0;
$subtotal = 0;
$valueError = "";

$json = file_get_contents('data/e4p/state-tax.json');
$data = json_decode($json, true);
$states = $data['states'];


//If the string the user enters matches
//one of the keys in the array,

//return the value of the matching key.

if( isset($_POST['submitted']) ) {


	if ( isset($_POST['subtotal'] ) ) {
		$subtotal = $_POST['subtotal'];

	if($subtotal > 0) {
		$hasSubtotal = true;
		} else {
			$valueError = "Please enter a subtotal.";
		}
	}

	if( isset($_POST['state']) ) {
		$stateAbb = $_POST['state'];

		foreach($states as $key => $value) {
			if($key == $stateAbb) {
				$tax = $value;
			}
		}

		if($stateAbb) {
			$hasStateAbb = true;
		} else {
			$valueError = "Please enter a state--";
		}
	}
}


$total = $subtotal + ($subtotal * ($tax / 100)); 
	

?>

<h2 class='title-voice'><?=$exercise['name']?></h1>

<form method='POST'>

<?php 

foreach($fields as $field) { ?>


	<field>
			<label><?=$field['label']?></label>
			<input type='<?=$field['type']?>'name='<?=$field['name']?>' min='<?=$field['min']?>' step='<?=$field['step']?>' >
			<?php if($valueError) { ?>
				<p class='error'><?=$valueError?></p>
			<?php } ?>
	</field>

<?php } ?>

<button type='<?=$button['type']?>' name="<?=$button['name']?>"><?=$button['text']?></button>

</form>

<?php if($subtotal && $stateAbb) { ?>

<output>
<?php

	echo "<p>The subtotal is $" . $subtotal . ".</p>";

	echo "<p>The tax is " . $tax . "%.</p>";

	echo "<p>The total is $" . $total . ".</p>";
?>

<?php } ?>

</output>