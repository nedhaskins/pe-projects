<?php

$string = "Vega";

echo strlen($string);

$array1 = ["Sagittarius", "Cancer", "Gemini", "Pisces"];

$array2 = array("Sagittarius", "Cancer", "Gemini", "Pisces");
?>

<p> <?php print_r($array1); ?> </p>


<p> <?php var_dump($array1); ?> </p>

<?php

$float = 67.535184826;

var_dump($float);

?>

<p> <?php print_r($array1); ?> </p>

<?php

$array1[] = "Taurus"; //add this element to $array1

print_r($array1);

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2); //select two items from the $input array
echo $input[$rand_keys[0]] . "\n"; //select the first random item
echo $input[$rand_keys[1]] . "\n";
?>




