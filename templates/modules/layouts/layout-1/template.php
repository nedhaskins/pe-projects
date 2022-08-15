	<inner-column>

		<article-section>
			<div class='article-heading'>
				<h2 class='heading-voice'>Heading level 2</h2>
				<p class='copy-voice'>This is some body text. This is some body text. This is some body text. This is some body text.</p>
			</div>

			<?php $items = $section['items']; ?>

			<div class='articles'>

				<?php foreach ($items['articles'] as $article) { ?>
					<div class='article'>
						<div class=line></div>
						<h3 class='heading-voice'><?=$article['title']?></h3>
						<p class='copy-voice'><?=$article['content']?></p>
					</div><!--article-->
				<?php }  ?>
			</div>
		</article-section>




		<picture-section>

	<?php
			foreach ($items['images'] as $image) { ?>
				<picture>
						<img src='<?=$image['image']?>' alt="">
				</picture>
			<?php  
		} ?>
		</picture-section>

	</inner-column>