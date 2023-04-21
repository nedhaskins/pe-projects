<?php

	//First initialize the variables.  None of them have any value yet, as nothing has been entered by the user.

	$routeType = "";
	$routeName = "";
	$lengthInMiles = 0;
	$startLocation = "";
	$endLocation = "";

	$hasRouteType = false;
	$hasRouteName = false;
	$hasLengthInMiles = false;
	$hasStartLocation = false;
	$hasEndLocation = false;

	$routeTypeError = false;
	$routeNameError = false;
	$lengthInMilesError = false;
	$startLocationError = false;
	$endLocationError = false;


	$formSubmitted = isset($_POST["submitted"]);

	$response = "";  //default reponse can be set

	function createNewRoute($type, $name, $length, $start, $end) {

		$newRoute = [
			'type' => $type, 
			'name' => $name,
			'lengthInMiles' => $length,
			'startPoint' => $start,
			'endPoint' => $end,
		];

		$jsonFile = file_get_contents('data/route-bucket.json');

		//turn JSON into PHP
		$phpArray = json_decode($jsonFile, true);

		print_r($phpArray);

		//push to the "JSON object"
		$resultArray = array_push($phpArray, $newRoute);

		//put it back into JSON format
		$encoded = json_encode($resultArray);

		file_put_contents('data/route-bucket.json', $encoded);

		echo $encoded;

		$response = "IT WORKED :)";

		var_dump($newRoute);

	};

	if($formSubmitted) {

		if( isset($_POST['route-type']) ) {
			$routeType = $_POST['route-type'];

			if($routeType) {
			//if the option chosen is not an empty string
				$hasRouteType = true;
			} else {
				$routeTypeError = "Please select a route type.";
			}
			//the logic for this error appearing appears in the HTML below
		}

		if( isset($_POST['route-name']) ) {
			$routeName = $_POST['route-name'];

			if( strlen($routeName) > 0 ) {
				$hasRouteName = true;
			} else {
				$routeNameError = "Please add a route name.";
			}
		}

		if( isset($_POST['length-in-miles']) ) {
			$lengthInMiles = $_POST['length-in-miles'];

			if( intval($lengthInMiles) > 0 ) {
				$hasLengthInMiles = true;
			} else {
				$lengthInMilesError = "Please add a valid route length!";
			}
		}

		if( isset($_POST['start-location']) ) {
			$startLocation = $_POST['start-location'];

			if( strlen($startLocation) > 0 ) {
				$hasStartLocation = true;
			} else {
				$startLocationError = "Please add a starting location.";
			}
		}

		if( isset($_POST['end-location']) ) {
			$endLocation = $_POST['end-location'];

			if( strlen($endLocation) > 0 ) {
				$hasEndLocation = true;
			} else {
				$endLocationError = "Please add an end location.";
			}
		}

		$isDataFilledOut = $routeType && $routeName && $lengthInMiles && $startLocation && $endLocation;

		if($isDataFilledOut) {

			createNewRoute($routeType, $routeName, $lengthInMiles, $startLocation, $endLocation);

			$response = "successful";

		} else {
			$response = "Data encoding error!";
		}

	} else {
		echo "Form hasn't been submitted yet.";
	}	
?>

<h1>Enter the route's info here!</h1>

<form method='POST'>
	<field>
		<label>Route Type</label>
		<select name="route-type" id="route-type" required="required">
			<option value="" selected="true" disabled="disabled">What type of route is this?</option>
			<option value="interstate">Interstate</option>

			<option value="state-route">State Route</option>

			<option value="usRoute">US Route</option>

			<?php if($routeTypeError) { ?>
				<p class='error'><?=$routeTypeError?></p>


			<?php } ?>

		</select>
	</field>

	<field>
		<label>Route Name</label>
		<input name='route-name' type='text' value='<?=$routeName?>'>
		<?php if($routeNameError) { ?>
			<p class='error'><?=$routeNameError?></p>
		<?php } ?>
	</field>

	<field>
		<label>Length in Miles</label>
		<input name='length-in-miles' type='number' value='<?=$lengthInMiles?>'>
		<?php if($lengthInMilesError) { ?>
			<p class='error'><?=$lengthInMilesError?></p>
		<?php } ?>
	</field>

	<field>
		<label>Starting Location</label>
		<input name='start-location' type='text' value='<?=$startLocation?>'>
		<?php if($startLocationError) { ?>
			<p class='error'><?=$startLocationError?></p>
		<?php } ?>
	</field>

	<field>
		<label>End Location</label>
		<input name='end-location' type='text' value='<?=$endLocation?>'>
		<?php if($endLocationError) { ?>
			<p class='error'><?=$endLocationError?></p>
		<?php } ?>
	</field>

	<button class='route-button' type="submit" name='submitted'>Add route</button>

	<p class='form-response'><?=$response?></p>
</form>