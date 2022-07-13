<?php

$won = false;
$rate = false;



if( isset($_POST['submitted']) ) {

	if( isset($_POST['won']) ) {
		$won = $_POST['won'];
		} else {
			echo "Please enter a won amount.";
	}

	if( isset($_POST['rate']) ) {
		$rate = $_POST['rate'];
		} else {
			echo "Please enter a won amount.";
	}
}

if($rate > 0) {
	$dollars = $won / $rate;
	} else {
	echo "Can't divide by 0!";
}

$message = "Exchanging $won won at a rate of $rate."

?>





<form method='POST'>
	<field>
		<label>How many won are you exchanging?</label>
		<input name='won' type='number'>
	</field>

	<field>
		<label>What is the exchange rate?</label>
		<input name='rate' type='number'>
	</field>

	<button type='submit' name='submitted'>Get the current rate</button>
</form>


