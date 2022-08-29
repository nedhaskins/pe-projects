<section class="<?=$pageData['slug']?>">

<?php

$header = $pageData['header'];
$copy = $pageData['copy'];


include('templates/modules/header-and-text/template.php'); 

$labItems = $pageData['labItems'];

	//$linkcard = $section; // coming from section loop in parent file (either the-lab or projects

	foreach($labItems as $link) {
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

