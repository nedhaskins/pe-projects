<?php

$json = file_get_contents('articleData.json');

$articleData = json_decode($json, true);






foreach ($articleData as $item) {

	$articleCard = $item['article-card'];
	$articles = $item['articles'];

	?>

	<div class='article-card'>
		
		<h1><?=$articleCard['title']?></h1>
		<p><?=$articleCard['teaser']?></p>
		<button><?=$articleCard['buttonText']?></button>

	</div>

	<?php foreach ($articles as $article) { ?>

		<div class='article'>
			
			<h1><?=$article['title']?></h1>
			<p><?=$article['teaser']?></p>
			<button><?=$article['buttonText']?></button>

		</div>

	<?php } ?>

<?php } ?>




