<?php

$title = $section['items']['title'];
$sections = $section['items']['sections'];

?>

<!-- <section class='header'> -->
<header class='site-header'>

	<h1 class='heading-voice'><?=$title?></h1>

</header>

<shirts>

<?php
	$heading = $sections[0]['heading'];
	$images = $sections[0]['images']; ?>

	<h3 class='heading-voice'><?=$heading?></h3>

	<picture-section>	

		<?php foreach($images as $image) { ?>

			<picture class='shop-photo'>
				<img src='<?=$image['image']?>' alt="">
				<figcaption class='copy-voice'><?=$image['figcaption']?></figcaption>
			</picture>

		<?php } ?>

	</picture-section>

</shirts>

<tattoos>
	<?php
		$heading = $sections[1]['heading'];
		$pictures = $sections[1]['pictures'];?>

	<h3 class='heading-voice'><?=$heading?></h3>

	<picture-section>	
		<?php foreach($pictures as $picture) { ?>
				<picture class='shop-photo'>
					<img src='<?=$picture?>' alt="">
				</picture>
		<?php } ?>
	</picture-section>
</tattoos>

<artists>
	<?php
	$heading = $sections[2]['heading'];
	$pictures = $sections[2]['pictures'];?>
	
	<h3 class='heading-voice'>Artists</h3>

	<picture-section>	
		<?php foreach($pictures as $picture) { ?>
			<picture class='shop-photo'>
				<img src='<?=$picture?>' alt="">
			</picture>
		<?php } ?>
	</picture-section>

</artists>

