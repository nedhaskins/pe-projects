<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
	<body>

		<?php

		$previousClose = 50;
		$currentValue = 48;


		echo "<p>The current stock price is " . $currentValue . " - ";

		if ($currentValue < $previousClose) {
			echo "sell!</p>";
		} elseif ($currentValue == $previousClose) {
			echo "take no action.</p>";
		} else {
			echo "buy!</p>";
		}

		$valueOne = -105;
		$valueTwo = $valueOne + 47;
		$valueThree = $valueOne / $valueTwo;

		echo "<p>Now for some variable combos. Consider two numbers,
		" . $valueOne . " and " . $valueTwo . ". Dividing these numbers will yield
		" . $valueThree . ".</p>";


		if ($valueOne % 2 == 0) {
			echo "This number is even";
		} else {
			echo "" . $valueOne . " is odd.";
		}

		if ($valueThree > 0 and $valueThree < 1) {
			echo "<p>" . $valueThree . " is a positive fraction.</p>";
		} elseif ($valueThree < 0 and $valueThree > -1) {
			echo "<p>" . $valueThree . " is a negative fraction.</p>";
		} elseif ($valueThree < -1) {
			echo "<p>" . $valueThree . " is negative AND less than -1.</p>";
		} else {
			echo "<p>" . $valueThree . " is positive AND greater than 1.</p>";
		}

		?>

	</body>
</html>