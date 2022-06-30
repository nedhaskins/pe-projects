<?php if ( isset($_POST['add']) ) {
	echo "added";
	}	
?>

<h1>Enter the route's info here!</h1>

<form method='POST'>

	<select name="routes" id="route-select">
		<option value="">What type of route is this?</option>
		<option value="">Interstate</option>
		<option value="">State Route</option>
	</select>

	<field>
		<label>Route Name</label>
		<input>
	</field>

	<field>
		<label>Length in Miles</label>
		<input type='number'>
	</field>

	<field>
		<label>Starting Location</label>
		<input>
	</field>

	<field>
		<label>End Location</label>
		<input>
	</field>

	<button type="submit" name='add'>Add route</button>

</form>