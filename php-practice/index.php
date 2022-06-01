<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Vampiro+One|Ceviche+One|Hammersmith+One">
		<title></title>

		<style>

			body {

				--alpha: white;
				--beta: red;
				--gamma: lime;
				--emphasis-transform: uppercase;

				background-color: yellow;
				font-family: "Hammersmith One";

			}
			.three span {
				color: var(--alpha);
				background-color: var(--beta);
				text-transform: var(--emphasis-transform);
			}

			span {
				color: var(--beta);
				background-color: var(--alpha);
				text-transform: var(--emphasis-transform);
			}
		</style>
	</head>
	<body>

		<?php

		$nounOne = "snail";
		$nounTwo = "walnut";
		$nounPlural = "turtles";
		$adjOne = "hoarse";
		$adjTwo = "splendid";
		$verbOne = "slice";
		$verbTwo = "descend";
		$time = "dawn";
		$quotient = (25 / 5);
		$bodyPart = "stomach"; 
		$Link = "http://www.wsws.org";

		echo "<p>Today, every student has a computer small enough to fit into their <span>" . $nounOne . "</span>. You can solve any math problem simply by pushing the computer's little <span>" . $nounTwo . "</span>.</p>";

		echo "<p>Computers can add, multiply, divide, and <span>" . $verbOne . "</span>. They can also <span>" . $verbTwo . "</span> better than a human.</p>";

		?>

		<p class="three">Some computers have their own <span><?=$bodyPart?></span>. Others have a <span><?=$adjOne?></span> screen that shows all kinds of <span><?=$nounPlural?></span> and <span><?=$adjTwo?></span> figures.</p>

		<p>The solution is <?=$quotient?>, by the way...</p>

		<a href=<?=$Link?>>The link.</a>

	</body>
</html>