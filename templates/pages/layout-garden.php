<?php

$json = file_get_contents('data/pages/layout-garden.json');

$pageData = json_decode($json, true);

$sections = $pageData['sections'];

?> 


<section class='layout-garden'>


		<?php foreach($sections as $section) {

			$header = $section['header'];
			$copy = $section['copy'];

			include('templates/modules/header-and-text/template.php');
		} ?>


		<?php foreach($sections as $section) {

			$items = $section['items'];

			include('templates/modules/graphic-list/template.php');
		} ?>




<!-- 		<a href='templates/modules/layouts/layout-1/index.php'>Layout 1</a>
		<a href='templates/modules/layouts/layout-2/index.php'>Layout 2</a>
		<a href='templates/modules/layouts/layout-3/index.php'>Layout 3</a>
		<a href='templates/modules/layouts/layout-4/index.php'>Layout 4</a>
		<a href='templates/modules/layouts/layouts-5-6/index.php'>Layouts 5 - 6</a>

 -->



	</section>