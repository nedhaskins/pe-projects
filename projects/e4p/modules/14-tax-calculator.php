<?php

function showErrors() {
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
}
showErrors();

$tax = 0;
$subtotal = 0;
$valueError = "";

$json = file_get_contents('../data/state-tax.json');
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

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="../css/site.css">
</head>
<body>

<h1>#14 - State Sales Tax Calculator</h1>

<form method='POST'>

	<field>
			<label>Enter the subtotal.</label>
			<input name='subtotal' type='number' step='0.01' min='0'>
			<?php if($valueError) { ?>
				<p class='error'><?=$valueError?></p>
			<?php } ?>
	</field>



	<field>
			<label>Enter the state's abbreviation.</label>
			<input name='state' type='text'>
			<?php if($valueError) { ?>
			<p class='error'><?=$valueError?></p>
			<?php } ?>
	</field>
<button type='submit' name="submitted">Submit</button>

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

</body>
</html>