<?php

$json = file_get_contents("data/highways.json");
$highways = json_decode($json, true);

?>

<h2>List of current routes</h2>

<p>From here, you can view all routes or filter them by type.</p>

<form method="POST">
	<field>
      <label>Filter routes by type</label>

      <select name="route-filter" id="route-filter" required>

          <option value="" selected disabled>What kind of routes are you looking for?</option>

      	<option value="interstate">Interstate</option>
      	<option value="us-route">US Route</option>
      	<option value="state-route">State Route</option>
     
      </select>

      <button type="submit" name="submitted">Filter routes</button>

  </field>
</form>

<ul>
	<?php
	if( isset ($_POST['submitted']) ) {
		foreach($highways as $highway) {
			if($_POST['route-filter'] == $highway['type']) { ?>
				<li>
					<a href="?page=route&slug=<?=$highway['id']?>"><?=$highway['name']?></a>
				</li>
		<?php }
		}
	} else {
		foreach($highways as $highway) { ?>
			<li>
				<a href="?page=route&slug=<?=$highway['id']?>"><?=$highway['name']?></a>
			</li>
	<?php }
	} ?>
</ul>