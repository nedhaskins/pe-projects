<?php

$json = file_get_contents('data/pages/projects.json');
$pageData = json_decode($json, true);
$sections = $pageData['sections'];

foreach($sections as $MainSection) {

	$caseStudy = $MainSection['caseStudy'];

	if($MainSection['slug'] == $_GET['slug']) { ?>

		<section class='case-study'>

			<h2 class='attention-voice'><?=$caseStudy['title']?></h2>
			<p class='body-copy'><?=$caseStudy['copy']?></p>

			<?php	foreach($caseStudy['sections'] as $section) {
				$moduleType = $section['moduleType'];
				include("templates/modules/$moduleType/template.php");	
			} ?>




			<a class='external-link' href="projects/<?=$MainSection['slug']?>/index.<?=$MainSection['siteXtensionType']?>">Link to the project</a> 

		</section>
	
	<?php }

	} ?>