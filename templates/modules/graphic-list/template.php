		<section class='graphic-list'>
			<ul>
				<?php foreach ($section['exercises'] as $exercise) { ?>
					<li class='list-item'>
						<?php if($exercise['image'] != "") { ?>
							<picture class='e4p-image'><?php include($exercise['image']); ?></picture>
						<?php } ?>
						<a href="?page=<?=$exercise['pageType']?>&slug=<?=$exercise['slug']?>"><?=$exercise['name']?></a>
					</li>
				<?php } ?>
			</ul>
		</section>