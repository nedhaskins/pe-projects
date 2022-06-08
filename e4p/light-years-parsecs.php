<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href='css/style.css'>
</head>
<body>

	<?php


	//$dataArray = $_POST;

	$lydistance = 0;
	$luminosity = 0;
	$starname = "";

	if ( isset ($_POST['submitted']) ) {

		if ( isset ($_POST['starname']) ) {
			$starname = $_POST['starname'];
		} else {
		
		$starname="I'm empty";
		}

		if ( isset ($_POST['lydistance']) ) {
			if ($_POST['lydistance'] >= 0 ) {
			$lydistance = $_POST['lydistance'];
			}
		}

		if ( isset ($_POST['luminosity']) ) {
			if ($_POST['luminosity'] >= 0) {
			$luminosity = $_POST['luminosity'];
			}
		}
	}

		$pcdistance = $lydistance * 0.306601;

	?>

<form method='POST'>

	<h1>Star Data Entry Sheet</h1>

	<div class="field">
		<label>Star name</label>
		<input type='text' name='starname' value="Enter here">
	</div>

	<div class='field'>
		<label>Distance from Earth in light years</label>
		<input type='number' name='lydistance'> 
	</div>

	<div class='field'>
		<label>Luminosity in lumens</label>
		<input type='number' name='luminosity'>
	</div>

	<button type='submit' name='submitted'>Submit
	</button>

</form>

<?php

	echo "<p>Star name: " . $starname . "</p>";
	echo "<p>Distance to Earth in light years: " . $lydistance . "</p>";
	echo "<p>Distance to Earth in parsecs: " . $pcdistance . "</p>";
	echo "<p>Luminosity: " . $luminosity . "</p>";

?>




</body>
</html>