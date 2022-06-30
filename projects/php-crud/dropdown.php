

<?php

$routeType = "";
$hasRouteType = false;
$routeTypeError = false;

if( isset($_POST["add"]) ) {

	if( isset($_POST['route-type']) ) {
		$routeType = $_POST['route-type'];

		if($routeType) {
			$hasRouteType = true;

		} else {
			$routeTypeError = "ERROR";

			echo $routeTypeError;
		}

	// 	if($routeType['value'] != "") {
	// 	//if the option chosen is not an empty string
	// 		$hasRouteType = true;
	// 	} else {
	// 		$routeTypeError = "Please add a route type.";
	// 	}
	// }
}
}
?>

<form method='POST'>
	<field>
		<label>Route Type</label>
		<select name="route-type" id="route-type">
			<option value="" selected="true" disabled="disabled">What type of route is this?</option>
			<option value="interstate">Interstate</option>

			<option value="stateRoute">State Route</option>

			<?php if($routeTypeError) { ?>
				<p class='error'><?=$routeTypeError?></p>

			<?php } ?>
		</select>
	</field>

<form>

<button class='route-button' type="submit" name='add'>Add route</button>
