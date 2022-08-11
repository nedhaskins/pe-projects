<?php

$json = file_get_contents('data/pages/projects.json');
$pageData = json_decode($json, true);
$sections = $pageData['sections'];

foreach($sections as $section) {

	$caseStudy = $section['caseStudy'];

	if($section['slug'] == $_GET['slug']) {
		echo $section ['slug']; ?>

		<section class='case-study'>

			<h2 class='attention-voice'><?=$caseStudy['title']?></h2>
			<p class='body-copy'><?=$caseStudy['copy']?></p>

			<?php	foreach($caseStudy['sections'] as $section) {
				$moduleType = $section['moduleType'];
				include("templates/modules/$moduleType/template.php");	
			} 

		echo "</section>";
	
	} 

} ?>