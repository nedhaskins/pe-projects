<?php

$highwayData = getHighwayById($_GET['slug']); ?>

<section class="route-detail">

	<page-left>

		<h2 class='page-title'><?=$highwayData['name']?></h2>

		<picture-wrapper>
			<picture class='route-shield'>
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
	</page-left>
	<page-right class='photos'>
		
        <picture class='stock-photo'><img src="images/minneapolis-1.jpeg"></picture>
        <picture class='stock-photo'><img src="images/us-11-photo.jpg"></picture>
        <picture class='stock-photo'><img src="images/va-20-photo.jpeg"></picture>

	</page-right>
</section>


<!--include extra modules with cool descriptions of cool places later on -->
