<?php

$slug = $_GET['slug'] ?? false;

$highway = getHighwayById($slug);

$buttonMessage = 'Update route';

$id = $highway['id'];
$type = $highway['type'];
$number = $highway['number'];
$lengthInMiles = $highway['length'];
$startLocation = $highway['startLocation'];
$endLocation = $highway['endLocation'];
$image = $highway['image'];
$description = $highway['description'];


show($highway);

?>

<picture>
	<img src="<?=$image?>" alt="todo">
</picture>

<?php


include('templates/components/form.php');

if ( isset($_POST['submitted']) ) {

	if($_POST['route-type'] == 'interstate') {
		$name = 'Interstate';

	} elseif($_POST['route-type'] == 'us-route') {
		$name = 'US Route';

	} elseif($_POST['route-type'] == 'state-route') {
		$name = 'State Route';
	}















	// $updatedHighway = array(

	// 	'id' => uniqid('highway'),
	// 	'type' => $_POST['route-type'],
	// 	'number' => $_POST['route-number'],
	// 	'name' => $name . " " . $_POST['route-number'],
	// 	'length' => $_POST['length-in-miles'],
	// 	'startLocation' => $_POST['start-location'],
	// 	'endLocation' => $_POST['end-location'],
	// 	'description' => $_POST['description'],
	// 	'image' => uploadImageFile()

	// );

	// $index = array_search($id, $highways);

	// $highways[$index] = $updatedHighway;

	// $encoded = json_encode($highways);

	// if( file_put_contents('data/highways.json', $encoded) ) {
	// 	echo "The route was successfully updated!";
	// // header("Location: templates/pages/success.php");
	// }
}

?>

<nav>
    <ul>
        <li><a href='?'>Home</a></li>
        <li><a href='?page=route-list'>Route List</a></li>
        <li><a href='?page=create'>Create a route</a></li>
    </ul>
</nav>