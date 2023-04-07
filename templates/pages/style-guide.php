

<section class="<?=$pageData['slug']?>">

	<section class='header-and-text'>
	  <h1 class='title-voice'><?=$pageData['header']?></h1>
	  <p class='body-copy'><?=$pageData['copy']?></p>
	</section>

	<?php foreach ($pageData['modules'] as $module) {

		$type = $module['type'];
		$header = $module['header'] ?? false;
		$copy = $module['copy'] ?? false;

		$imageHeader = $module['image-header'] ?? false;
		$image = $module['image'] ?? false;
		$alt = $module['alt'] ?? false;
		$figCaption = $module['figcaption'] ?? false;

		$name = $module['name'] ?? false;
		$updated = $module['updated'] ?? false;
		$buttons = $module['buttons'] ?? false;

		$items = $module['items'] ?? false;

		$description = $module['description'] ?? false;
		
		$jobs = $module['jobs'] ?? false;
		$certs = $module['certs'] ?? false;
		$education = $module['education'] ?? false;

		echo "<div class='line'></div>";
			
			include('templates/modules/' . $module['type'] . '/template.php');

		} ?>

	</ul>

</section>
