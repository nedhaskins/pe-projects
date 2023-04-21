<?php

$jsonFile = file_get_contents('data/data.json');

print_r($jsonFile);
echo "<p>&nbsp;</p>";


$phpArray = json_decode($jsonFile, true);

print_r($phpArray);
echo "<p>&nbsp;</p>";

$testRoute = [
			'id' => 'us522',
			'type' => 'us-route', 
			'name' => 'US Route 522',
			'thumbnail' => 'us-522.jpg',
			'lengthInMiles' => 900,
			'startPoint' => 'south',
			'endPoint' => 'north',
		];

print_r($testRoute);
echo "<p>&nbsp;</p>";







$resultArray = array_push($phpArray, $testRoute);



echo "The new array";

print_r($resultArray);
echo "<p>&nbsp;</p>";