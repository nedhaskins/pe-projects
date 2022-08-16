



		<article-section>
			<header>
				<?php $items = $section['items']; ?>
					<h2 class='heading-voice'><?=$items['heading']?></h2>
					<p class='copy-voice'><?=$items['opening']?></p>
					
			</header>

			<div class='articles'>
				<?php
				$items = $section['items'];
					foreach ($items['articles'] as $article) { ?>
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


