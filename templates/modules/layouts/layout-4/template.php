

<?php 


$header = $section['items'][0]['header'];
$articles = $section['items'][1]['articles'];



?>


<header class='site-header'>
	<h4 class='teaser-voice'><?=$header['teaser']?></h4>
	<h2 class='heading-voice'><?=$header['title']?></h2>
	<p class='copy-voice'><?=$header['copy']?></p>
</header>

<section class='articles'>

	<div class='article-group'>


	<?php foreach($articles as $article) {	
		$teaser = $article['teaser'];
		$dropdowns = $article['dropdowns']; ?>

		<h4 class='teaser-voice'><?=$teaser?></h4>

		<?php foreach($dropdowns as $dropdown) { ?>

		<article>
			<details>
				<summary><?=$dropdown['title']?></summary><?=$dropdown['content']?>
			</details>
		</article>

	<?php }

} ?>


	</div><!--article-group-->







































<!-- 
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href='../css/site.css'>

	<title></title>
</head>
<body>

	<section class='drop-downs'>
		<inner-column>

			<?php //include('../templates/modules/drop-downs/drop-downs.php'); ?>

		</inner-column>
	</section>

</body>
</html> -->