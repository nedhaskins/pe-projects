<article-section>
	
	<header>
		<h4 class='teaser-voice'><?=$teaser?></h4>
		<h2 class='heading-voice'><?=$heading?></h2>
		<p class='copy-voice'><?=$opening?></p>
	</header>

	<div class='articles'>

		<?php foreach ($articles as $article) { ?>

			<article>
				<logo>
					<?php include('logo.svg'); ?>
				</logo>
				<h3 class='heading-voice'><?=$article['title']?></h3>
				<p class='copy-voice'><?=$article['content']?></p>
			</article>

		<?php } ?>

	</div>
</article-section>