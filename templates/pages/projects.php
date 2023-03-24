<section class="<?=$pageData['slug']?>">

<?php

	$header = $pageData['header'];
	$copy = $pageData['copy'];

	include('templates/modules/header-and-text/template.php'); 

	$projects = $pageData['projects'];

	//$linkcard = $section; // coming from section loop in parent file (either the-lab or projects

	foreach($projects as $link) {
		$name = $link['name'];
		$slug = $link['slug'];
		$image = $link['image'];
		$description = $link['description'];
		$url = $link['url'] ?? false;
		$isExternalLink = ($url !== "");
		
		$caseStudy = $link['caseStudy'] ?? false;

		//Rerouting the case studies for now while the revised layout is being worked out. 3/24/23
		// $caseStudyURL = $link['caseStudyURL']; 

		$hasCaseStudy = ($caseStudy != []); //brackets needed here...because the object's been translated into a PHP array
		
		include('templates/modules/link-card/template.php');  	 
 	}

 ?>

</section>