<section class='about-me'>


	<?php foreach($pageData['page-content'] as $item) { ?>

		<h2 class='<?=$item['subheading']?>'><?=$item['subheading']?></h2>
		<p class='<?=$item['body-copy']?>'><?=$item['body-copy']?></p>

	<?php } ?>

</section>