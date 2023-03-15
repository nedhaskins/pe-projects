<?php

$highwayData = getHighwayById($_GET['slug']); ?>

<section class="route-detail">

	<h2><?=$highwayData['name']?></h2>

	<picture-wrapper>
	<picture>
		<img src="<?=$highwayData['image']?>" alt="<?=$highwayData['name']?>">
	</picture>
	</picture-wrapper>

	<text-wrapper>
		<p><?=$highwayData['description']?></p>
	</text-wrapper>
	<nav class="route-menu">
		<ul>
			<li>
				<a href="?page=update&slug=<?=$_GET['slug']?>">Update route info</a>
			</li>
			<li>
				<a href="?page=delete&slug=<?=$_GET['slug']?>">Delete route</a>
			</li>
		</ul>
	</nav>
</section>


<!--include extra modules with cool descriptions of cool places later on -->
