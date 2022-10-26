<?php

//Page variables

$slug = $_GET['slug'] ?? false;
$buttonMessage = 'Update route';
$highway = getHighwayById($slug);
$type = $highway['type'];
$number = $highway['number'];
$lengthInMiles = $highway['length'];
$startLocation = $highway['startLocation'];
$endLocation = $highway['endLocation'];
$image = $highway['image'];
$description = $highway['description'];

?>

<h1>Update Route Info</h1>

<picture>
	<img src="<?=$image?>" alt="todo">
</picture>

<?php

if (isset($_POST['submitted']) ) {

   foreach($highway as $key => $value) {
     if( $_POST[$key] == $value ) {
     		$highway[$key] = $value;
         //if it matches the original value
     } else {
         $highway[$key] == $_POST[$key];
     }
 	}
}
//if the form is submitted -- figure out how to amend array to add new changes!!!!

?>

<?php include('templates/components/form.php'); ?>


<!--The goal is to popfulate the fields below with the date from the requested single highway.