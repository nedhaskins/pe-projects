
<?php
	$heading = $article['heading'];
	$description = $article['description'];
	$thumbnail = $description['thumbnail'];
	$distanceToBeach = $description['distanceToBeach'];
	$location = $description['location'];
	$noOfBeds = $description['noOfBeds'];
	$noOfBaths = $description['noOfBaths'];
	$petsAllowed = $description['petsAllowed'];

	if($petsAllowed == false) {
		$petsAllowed = "No Pets";
	} else {
		$petsAllowed = "Pets Allowed";
	}

?>

<article class='article-card'>
	<picture>
		<img src='images/<?=$thumbnail?>' alt='$todo'>
	</picture>

	<text-content>
		<h1 class='title strong-voice'><?=$heading?></h1>

		<ul>
			<li><?=$distanceToBeach?></li>
			<li><?=$location?></li>
			<li>Beds: <?=$noOfBeds?></li>
			<li>Baths: <?=$noOfBaths?></li>
			<li><?=$petsAllowed?></li>

		</ul>
	</text-content>
</article>
