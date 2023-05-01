<?php
$highways = getHighways();
$noRoutes = "There aren't any routes yet!  Click on \"Create Route\" to create one.";

function isSelected($value) {

	if ($_POST['route-filter'] === $value) {
		return 'selected';
	} else {
		return '';
	}
}

?>

<section class="route-list">
	<page-left>
		<text-wrapper>

			<?php if( empty($highways) ) { ?>
				<p class='no-routes'><?=$noRoutes?></p>
			<?php } ?>
			
			<h2 class='page-title'>Route List</h2>
			<p>From here, you can view all routes or filter them by type, or create a new route.</p>
			<p>Each detail page has information about each route.  You can edit the current data or delete the route from the database from that page.</p>
		</text-wrapper>
		<form-wrapper>
			<form class="filter-form" method="POST">
				<field>
			      <label>What type of route are you looking for?</label>

			      <select name="route-filter" id="route-filter" required>

			      	<option disabled selected>Choose filter</option>
			      	<option value="all-routes" <?=isSelected('all-routes')?>>All routes</option>
			      	<option value="interstate" <?=isSelected('interstate')?>>Interstate</option>
			      	<option value="us-route" <?=isSelected('us-route')?>>US Route</option>
			      	<option value="state-route" <?=isSelected('state-route')?>>State Route</option>
			     
			      </select> 
			  	<button class="form-button" type="submit" name="submitted">Filter routes</button>
			  </field>
			</form>
		</form-wrapper>
	</page-left>

	<page-right>
		<ul>
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
	</page-right>
</section>