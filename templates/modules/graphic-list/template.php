		<section class='graphic-list'>
			<ul>
				<?php foreach ($items as $item) { ?>
					<li class='list-item'>
						<?php if($item['image'] != "") { ?>
							<picture class='e4p-image'><?php include($item['image']); ?></picture>
						<?php } ?>
						<a href="?page=<?=$item['pageType']?>&slug=<?=$item['slug']?>"><?=$item['name']?></a>
					</li>
				<?php } ?>
			</ul>
		</section>