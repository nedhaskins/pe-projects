

		<article-section>
			<div class='article-heading'>
				<h4 class='teaser-voice'>Little teaser</h4>
				<h2 class='heading-voice'>Heading level 2</h2>
				<p class='copy-voice'>This is some body text. This is some body text. This is some body text. This is some body text.</p>
			</div>
			<div class='articles'>


			<?php $items = $section['items'];

				foreach ($items['articles'] as $article) { ?>
					<div class='article'>
						<logo>
							<?php include('logo.svg'); ?>
						</logo>
						<h3 class='heading-voice'><?=$article['title']?></h3>
						<p class='copy-voice'><?=$article['content']?></p>
					</div><!--article-->
				<?php } ?>
			</div>
		</article-section>

		<footer>
			<div class='line'></div>
			<div class='text-wrapper'>
				<p>This is some body text. This is some body text. This is some body text. This is some body text.</p>
			</div>
		</footer>




</body>
</html>