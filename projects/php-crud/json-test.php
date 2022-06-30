<?php

$json = file_get_contents("data.json");
//this pulls the data from the file and assigns the whole object to a variable.  This can be printed out as a string with echo.

$highwayData = json_decode($json, true);
//now this new variable is in associative array format!

print_r($highwayData);

$routeData = $highwayData['highways'];

print_r($routeData);

?>
