<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php


$arrayOne = ["peach", "plum", "pear", "banana", "lemon"];


$yellowCitrus = $arrayOne[4];


echo "<p>The last two elements in this array are " . $arrayOne[2] . " and " . $yellowCitrus . ".</p>";


echo "<p>$arrayOne[0]</p>";


$humanOne = [

	"name" => "Carina",
	"gender" => "woman",
	"race" => "Pacific Islander",
	"nationality" => "Guam",
	"hairColor" => "black",
	"eyeColor" => "black",
	"skinColor" => "brown",
	"heightInInches" => 64,
	"shoeSize" => 8.5,
	"personality" => ["unassuming", "funny", "inventive"]
];

?>

<p><?=$humanOne[name]?> is a  <?=$humanOne[race]?> <?=$humanOne[gender]?> from <?=$humanOne[nationality]?>.</p>

<?php


$arrayTwo = ["thunder", "clap", "storm", "cheese", "cake", "burger", "butter", "fly", "scotch", "bush", "fire"]

?>

<p><em>$arrayTwo</em> contains words that can be combined to form new words, such as <?php echo "$arrayTwo[3]" . "$arrayTwo[5]"?> and <?php echo "$arrayTwo[6]" . "$arrayTwo[7]"?>.</p>

<?php

$outdoorTemp = 85;
$percentHumidity = 10; 

if ($outdoorTemp > 80 and $percentHumidity > 85) {
	$currentLocation = "Singapore";
} elseif ($outdoorTemp > 80 and $percentHumidity < 20) {
	$currentLocation = "a desert";
}
?>

<p>The current temperature is <?=$outdoorTemp?> and the current humidity level is <?=$percentHumidity?>. You must be in <?=$currentLocation?>.</p>


</body>
</html>