<style>

	* {
		box-sizing: border-box;
	}
	
	label, input, button {
		/*border: 3px solid red;*/
	}

	label, input {
		display: block; /*just setting these up as block-level
		elements instead of inline-block*/
	}

	form {
		max-width: 600px;
		/*border: 5px solid green;*/
		padding: 40px;
		display: flex;
		flex-direction: column;
		align-items: center;

	}

	.field {
		/*border: 3px solid blue;*/
		background-color: cornsilk;
		display: flex;
		flex-direction: column;
		padding: 40px;
	}
 
	.field label {
		font-size: 14px;
		margin-bottom: 4px;
	}

	button[type='submit'], .field + .field {
		margin-top: 10px ;
	}

	form p {
		text-align: center;
	}

</style>

<form method='POST'>

	<p>Star Data Entry Sheet</p>

	<div class="field">
		<label>Star name</label>
		<input type='text' name = 'starname'>
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


	$dataArray = $_POST;

	$lydistance = 0;
	$luminosity = 0;

	if ( isset ($_POST['submitted']) ) {

		if ( isset ($_POST['starname']) ) {
			$starname = $_POST['starname'];
		} else {
			echo "<p>No star name entered.</p>";
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

		$pcdistance = $lydistance * 0.306601;

		echo "<p>Star name: " . $starname . "</p>";
		echo "<p>Distance to Earth in light years: " . $lydistance . "</p>";
		echo "<p>Distance to Earth in parsecs: " . $pcdistance . "</p>";
		echo "<p>Luminosity: " . $luminosity . "</p>";
		
	}

?>