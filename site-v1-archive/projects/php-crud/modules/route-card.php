<li class='route-card'>
	<picture>
		<img class='route-picture' src='images/<?=$route['thumbnail']?>'>
	</picture>

	<div class='text-content'>
		<h2 class='route-name'><?=$route['name']?></h2>
		<h3 class='route-info'>Length in miles: <?=$route['lengthInMiles']?></h3>
		<h3 class='route-info'>Start location: <?=$route['startPoint']?></h3>
		<h3 class='route-info'>End location: <?=$route['endPoint']?></h3>
		<a class='button' href='?page=detail&route=<?=$route['id']?>'>More info</a>
	</div>
</li>