<section class="<?=$pageData['slug']?>">

<h2 class='attention-voice'><?=$pageData['title']?></h2>
<p class='body-copy'><?=$pageData['intro']?></p>

<?php
$sections = $pageData['sections'];

	//$linkcard = $section; // coming from section loop in parent file (either the-lab or projects


	foreach($sections as $link) {
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