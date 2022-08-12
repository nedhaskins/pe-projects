		<section class='graphic-list'>
			<ul>
				<?php foreach ($section['items'] as $item) { ?>
					<li class='list-item'>
						<picture class='e4p-image'><?php include($item['image']); ?></picture>
						<a href="?page=e4p&slug=<?=$item['slug']?>"><?=$item['name']?></a>
					</li>
				<?php } ?>
			</ul>
		</section>