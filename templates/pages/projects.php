<section class="<?=$pageData['slug']?>">

<?php

$section = $pageData;

include('templates/modules/header-and-text/template.php'); 

$projects = $section['projects'];

	//$linkcard = $section; // coming from section loop in parent file (either the-lab or projects


	foreach($projects as $link) {
		$name = $link['name'];
		$slug = $link['slug'];
		$image = $link['image'];
		$description = $link['description'];
		$url = $link['url'] ?? false;
		$isExternalLink = ($url !== "");
		
		$caseStudy = $link['caseStudy'] ?? false; 

		$hasCaseStudy = ($caseStudy != []); //brackets needed here...because the object's been translated into a PHP array
		
		include('templates/modules/link-card/template.php');  
 
	 } ?>

</section>