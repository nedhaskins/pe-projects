<?php

$highways = getHighways();

//Pulling in the current highway data (before updating)
$currentHighwayId = $_GET['slug'];
$highway = getHighwayById($currentHighwayId);

$type = $highway['type'];
$number = $highway['number'];
$lengthInMiles = $highway['length'];
$startLocation = $highway['startLocation'];
$endLocation = $highway['endLocation'];
$image = $highway['image'] ?? false;
$description = $highway['description'];

$buttonMessage = 'Update highway';
include('templates/components/form.php');

if ( isset($_POST['submitted']) ) {

	if($_POST['route-type'] == 'interstate') {
		$name = 'Interstate';

	} elseif($_POST['route-type'] == 'us-route') {
		$name = 'US Route';

	} elseif($_POST['route-type'] == 'state-route') {
		$name = 'State Route';
	}

	$highway = array(
		'type' => $_POST['route-type'],
		'number' => $_POST['route-number'],
		'name' => $name . " " . $_POST['route-number'],
		'length' => $_POST['length-in-miles'],
		'startLocation' => $_POST['start-location'],
		'endLocation' => $_POST['end-location'],
		'description' => $_POST['description'],
		'image' => uploadImageFile() ?? $image,
	);

	$highways[$currentHighwayId] = $highway;

	$json = json_encode($highways);
	file_put_contents('data/highways.json', $json);

	echo "<p class='success'>The route was successfully updated!</p>";

}

?>


<?php show($highway); ?>

<picture>
	<img src="<?=$highway['image']?>" alt="todo">
</picture>


<nav>
    <ul>
        <li><a href='?'>Home</a></li>
        <li><a href='?page=route-list'>Route List</a></li>
        <li><a href='?page=create'>Create a route</a></li>
    </ul>
</nav>