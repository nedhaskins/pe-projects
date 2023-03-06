<?php

$highwayData = getHighwayById($_GET['slug']); ?>


<h2><?=$highwayData['name']?></h2>

<picture>
	<img src="<?=$highwayData['image']?>" alt="<?=$highwayData['name']?>">
</picture>

<p><?=$highwayData['description']?></p>


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


<nav class="page-menu">
	<ul>
		<li>
			<a href="?page=home">Home page</a>
		</li>
		<li>
			<a href="?page=route-list">Route list</a>
		</li>
	</ul>
</nav>


<!--include extra modules with cool descriptions of cool places later on -->
