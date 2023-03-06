<!--Current issues:  WHen the page refreshes, an entirely new image is copied and uploaded.
The name of the image is not saved in the update form.

-->


<div class="update-page">

	<h2>Update Route Info</h2>

	<?php

	// show($_FILES);

	//Pulling in the current highway data (before updating)
	$currentHighwayId = $_GET['slug'];
	$highway = getHighwayById($currentHighwayId);
	$highwayShield = $highway['image'] ?? false;

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
			'image' => uploadImageFile() ?? $highwayShield,
		);

		$highways = getHighways();
		$highways[$currentHighwayId] = $highway;

		$json = json_encode($highways);
		file_put_contents('data/highways.json', $json);

		echo "<p class='success'>The route was successfully updated!</p>";

	}

	include('templates/components/form.php');

	?>


	<picture class="update-photo">
		<img src="<?=$highway['image']?>" alt="todo">
	</picture>


	<?php show($highway); ?>

	<nav class="page-menu">
	    <ul>
	        <li><a href='?'>Home</a></li>
	        <li><a href='?page=route-list'>Route List</a></li>
	        <li><a href='?page=create'>Create a route</a></li>
	    </ul>
	</nav>

</div>