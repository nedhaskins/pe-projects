<section class='about-me'>


	<?php foreach($pageData['sections'] as $item) { ?>

		<h2><?=$item['subheading']?></h2>

		<?php foreach($item['body-copy'] as $paragraph) { ?>

		<p><?=$paragraph?></p>

	<?php } 

} ?>

</section>