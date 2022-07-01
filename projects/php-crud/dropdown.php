

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
			$routeTypeError = "Please add a route type.";
		}
	}
}

echo $routeType;

echo gettype($routeType);

	// function show($routeType) {
	// 	echo "<code class='show-code'>";
	// 	echo '<pre>';
	// 	print_r($routeType);
	// 	echo '</pre>';
	// 	echo '</code>';
	// }

?>



<form method='POST'>
	<field>
		<label>Route Type</label>
		<select name="route-type" id="route-type" required="required">
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

<?php 

//show($routeType); ?>