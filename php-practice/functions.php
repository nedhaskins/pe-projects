<style>
	background-color: black;
</style>

<?php

function recipe($crust, $sauce, $topping1, $topping2) {
	echo "<li>Use the " . $crust . " crust.</li>";		
	echo "<li>Use the " . $sauce . " sauce.</li>";
	echo "<li>Use the " . $topping1 . ".</li>";
	echo "<li>Use the " . $topping2 . ".</li>";
}

recipe("thin", "tomato", "artichokes", "tomatoes");

//practical, conservative example//


function collectStockData ($openPrice, $closePrice, $dailyHigh, $dailyLow, $percentChange) {
	
	$percentChange = (1 - ($openPrice/$closePrice)) * 100;
	$dailyStockData = ["openPrice","$closePrice", "dailyHigh", "dailyLow", "percentChange"];

	echo "<ol>";
	echo "<li>" . $openPrice . "</li>";
	echo "<li>" . $closePrice . "</li>";
	echo "<li>" . $dailyHigh . "</li>";
	echo "<li>" . $dailyLow . "</li>";
	echo "<li>" . $percentChange . "</li>";
	echo "</ol>";

}

collectStockData(257.30, 310.30, 335,30, 232.28);


//It will take fewer arguments than you specify if one of the arguments is a result of operations between two or more of the others!//

//maniac example//





function fly($mass, $fuelType, $cargoMass, $maxSpeed) {

echo "<p>Input a mass.</p>";

}


?>

<p>It printed!</p>