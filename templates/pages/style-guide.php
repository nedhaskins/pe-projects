
<section class="<?=$pageData['slug']?>">

	<section class='header-and-text'>
	  <h2 class='attention-voice'><?=$pageData['header']?></h2>
	  <p class='body-copy'><?=$pageData['copy']?></p>
	</section>

	<?php foreach ($pageData['sections'] as $section) {

		echo "<div class='line'></div>";
			
			include('templates/modules/' . $section['type'] . '/template.php');

		} ?>

	</ul>

</section>
