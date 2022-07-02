<?php

$json = file_get_contents("data/data.json");

$highwayData = json_decode($json, true);

$routeData = $highwayData['highways'];

?>

<ul>

	<?php foreach($routeData as $route) {

		if($page == $route['type']) {

			include('modules/route-card.php');
	 	}
	} ?>

</ul>