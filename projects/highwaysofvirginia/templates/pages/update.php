<?php

$slug = $_GET['slug'] ?? false;
$buttonMessage = 'Update route';

$filepath = 'data/highways.json';
$json = file_get_contents($filepath);
$highways =  json_decode($json, true);

foreach($highways as $highway) {

	if( $highway['id'] == $slug ) {

		$id = $highway['id'];
		$type = $highway['type'];
		$number = $highway['number'];
		$lengthInMiles = $highway['length'];
		$startLocation = $highway['startLocation'];
		$endLocation = $highway['endLocation'];
		$image = $highway['image'];
		$description = $highway['description'];

		show($highway);
		show($id);
	}

}


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

	$highway = array(
		'id' => uniqid('highway'),
		'type' => $_POST['route-type'],
		'number' => $_POST['route-number'],
		'name' => $name . " " . $_POST['route-number'],
		'length' => $_POST['length-in-miles'],
		'startLocation' => $_POST['start-location'],
		'endLocation' => $_POST['end-location'],
		'description' => $_POST['description'],
		'image' => uploadImageFile(),
	);



	//replace $highways[index] with $updatedHighway.


	$index = array_search($id, $highways);



var_dump($highways[$index]);

	//the above value is equal to the FIRST item in the array!

	$highways[$index] = $highway;
	
	$encoded = json_encode($highways);

	if( file_put_contents("data/highways.json", $encoded) ) {
		echo "Nice work. You did it!";
		// show($updatedHighway);

	}

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

	// 

	// $encoded = json_encode($highways);

	// if( file_put_contents('data/highways.json', $encoded) ) {
	// 	echo "The route was successfully updated!";
	// // header("Location: templates/pages/success.php");
	// }

?>

<nav>
    <ul>
        <li><a href='?'>Home</a></li>
        <li><a href='?page=route-list'>Route List</a></li>
        <li><a href='?page=create'>Create a route</a></li>
    </ul>
</nav>