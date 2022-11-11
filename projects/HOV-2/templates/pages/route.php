<?php

$highway = getHighwayById($_GET['slug']); ?>


<h2><?=$highway['name']?></h2>

<picture>
	<img src="<?=$highway['image']?>" alt="<?=$highway['name']?>">
</picture>

<p><?=$highway['description']?></p>


<button>
	<a href="?page=update&slug=<?=$_GET['slug']?>">Update route info</a>
</button>
<button>
	<a href="?page=delete&slug=<?=$_GET['slug']?>">Delete route</a>
</button>

<!--include extra modules with cool descriptions of cool places later on -->
