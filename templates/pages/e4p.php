<?php

$json = file_get_contents('data/pages/e4p.json');

$pageData = json_decode($json, true);

$sections = $pageData['sections'];

?> 


	<section class='e4p'>


		<?php foreach($sections as $section) {
			include('templates/modules/header-and-text/template.php');
		} ?>

		
		<?php include('templates/modules/button-list/template.php'); ?>


		<?php foreach($sections as $section) {
			include('templates/modules/graphic-list/template.php');
		}?>


	</section>