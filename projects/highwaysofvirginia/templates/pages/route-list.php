<?php

$highways = getHighways();

if( empty($highways) ) {
	echo "There aren't any routes yet!  Click on \"Create Route\" to create one.";
}

 ?>

<h2>Route List</h2>

<p>From here, you can view all routes or filter them by type, or create a new route.</p>

<p>Each detail page has information about each route.  You can edit the current data or delete the route from the database from that page.</p>

<form method="POST">
	<field>
      <label>What type of route are you looking for?</label>

      <select name="route-filter" id="route-filter" required>

      	<option value="all-routes">All routes</option>
      	<option value="interstate">Interstate</option>
      	<option value="us-route">US Route</option>
      	<option value="state-route">State Route</option>
     
      </select>

      <button class="form-button" type="submit" name="submitted">Filter routes</button>

  </field>
</form>

<ul class="route-list">
	<?php
	if( isset ($_POST['submitted']) ) {
		foreach($highways as $highwayId => $highwayData) {
			if($_POST['route-filter'] == $highwayData['type']) { ?>
				<li>
					<a href="?page=route&slug=<?=$highwayId?>"><?=$highwayData['name']?></a>
				</li>
		<?php } elseif($_POST['route-filter'] == 'all-routes') { ?>
				<li>
					<a href="?page=route&slug=<?=$highwayId?>"><?=$highwayData['name']?></a>
				</li>
		<?php }
		}
	} else {
		foreach($highways as $highwayId => $highwayData) { ?>
			<li>
				<a href="?page=route&slug=<?=$highwayId?>"><?=$highwayData['name']?></a>
			</li>
	<?php }
	} ?>
</ul>

<nav>
    <ul>
        <li><a href='?'>Home</a></li>
        <li><a href='?page=create'>Create a new route</a></li>
    </ul>
</nav>