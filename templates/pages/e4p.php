<?php

$json = file_get_contents('data/pages/e4p.json');

$pageData = json_decode($json, true);

$section = $pageData;

?> 


	<section class='e4p'>

		<?php	include('templates/modules/header-and-text/template.php'); ?>

		<?php include('templates/modules/button-list/template.php'); ?>

		<?php include('Templates/modules/graphic-list/template.php'); ?>

	</section>