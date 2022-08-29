<?php

$json = file_get_contents('data/pages/case-study.json');
$pageData = json_decode($json, true);
$caseStudies = $pageData;

foreach($caseStudies as $caseStudy) {

	$header = $caseStudy ['header'];
	$copy = $caseStudy ['copy'];
	$sections = $caseStudy['sections'];
	$slug = $caseStudy['slug'];
	$siteXtensionType = $caseStudy['siteXtensionType'];

	if($caseStudy['slug'] == $_GET['slug']) { ?>

		<section class='case-study'>

			<a class='linktype-1' href='?page=projects'>Back to Projects</a>

			<h2 class='attention-voice case-study'><?=$header?></h2>
			<p class='body-copy case-study'><?=$copy?></p>

			<?php	foreach($sections as $section) {

				$moduleType = $section['moduleType'];
				$header = $section['header'] ?? false;
				$copy = $section['copy'] ?? false;
				$imageHeader = $section['imageHeader'] ?? false;
				$image = $section['image'] ?? false;
				$alt = $section['alt'] ?? false;
				$figCaption = $section['figcaption'] ?? false;

				include("templates/modules/$moduleType/template.php");	
			} ?>

			<a class='linktype-1' href="projects/<?=$slug?>/index.<?=$siteXtensionType?>">Link to the project</a> 

		</section>
	
	<?php }

	} ?>