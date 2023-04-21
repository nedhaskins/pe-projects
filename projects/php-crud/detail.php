<?php

$json = file_get_contents("data/data.json");

$highwayData = json_decode($json, true);

$routeData = $highwayData['highways'];

?>

<?php

	if ( isset($_GET['route']) ) {
		$this_route_id = $_GET['route'];
	}

	// echo $this_route_id;

	foreach($routeData as $route) {

		if($this_route_id == $route['id']) {
			$detail = $route;
		}
	}
?>



<?php if (isset($detail) ) { ?>


<h1 class='loud-voice'><?=$detail['name']?></h1>


<picture class='detail-image'>
	<img src="images/<?=$detail['thumbnail']?>" alt="">
</picture>


<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<?php } ?>