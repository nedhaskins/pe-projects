<?php

$json = file_get_contents('data/pages/case-study.json');
$pageData = json_decode($json, true);
$caseStudies = $pageData;

foreach($caseStudies as $caseStudy) {

	if($caseStudy['slug'] == $_GET['slug']) { ?>

		<section class='case-study'>

			<a href='?page=projects'>Back to Projects</a>

			<h2 class='attention-voice'><?=$caseStudy['header']?></h2>
			<p class='body-copy'><?=$caseStudy['copy']?></p>

			<?php	foreach($caseStudy['sections'] as $section) {
				$moduleType = $section['moduleType'];
				include("templates/modules/$moduleType/template.php");	
			} ?>




			<a class='external-link' href="projects/<?=$caseStudy['slug']?>/index.<?=$caseStudy['siteXtensionType']?>">Link to the project</a> 

		</section>
	
	<?php }

	} ?>