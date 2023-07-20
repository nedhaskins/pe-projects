

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
	</div>
</section>