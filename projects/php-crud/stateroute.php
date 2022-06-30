//If the type of the item from the dataset equals the $_GET value //for the page....


//return all of the objects with that type.

<?php

$json = file_get_contents("data.json");

$highwayData = json_decode($json, true);

$routeData = $highwayData['highways'];

?>

<ul>

	<?php foreach($routeData as $route) {

		if($page == $route['type']) { ?>

		<li class='route-card'>
			<picture>
				<img src='images/<?=$route['thumbnail']?>'>
			</picture>
			<h2 class='route-name'><?=$route['name']?></h2>
			<h3 class='length-in-miles'>Length in miles: <?=$route['lengthInMiles']?></h3>
			<h3 class='start-point'>Start location: <?=$route['startPoint']?></h3>
			<h3 class='end-point'>End location: <?=$route['endPoint']?></h3>
			<a class='button' href='?page=detail&route=<?=$route['id']?>'>More info</a>
		</li>

		<?php }
	 } ?>
</ul>


