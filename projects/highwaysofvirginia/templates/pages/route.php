<?php

$highwayData = getHighwayById($_GET['slug']); ?>


<h2><?=$highwayData['name']?></h2>

<picture>
	<img src="<?=$highwayData['image']?>" alt="<?=$highwayData['name']?>">
</picture>

<p><?=$highwayData['description']?></p>


<button>
	<a href="?page=update&slug=<?=$_GET['slug']?>">Update route info</a>
</button>
<button>
	<a href="?page=delete&slug=<?=$_GET['slug']?>">Delete route</a>
</button>

<!--include extra modules with cool descriptions of cool places later on -->
