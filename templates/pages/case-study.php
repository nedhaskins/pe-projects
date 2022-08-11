<?php


$json = file_get_contents('data/pages/projects.json');
$pageData = json_decode($json, true);
$sections = $pageData['sections'];


 foreach($sections as $section) {


	$caseStudy = $section['caseStudy'];


				if($section['slug'] == $_GET['slug']) {
					echo $section ['slug']; ?>

						<section class='case-study'>

									<!--step 1: use the dummy copy
										 step 2: replace the dummy copy with the grabbed variables from above
										 step 3: replace that with the template after respelling the above variables to fit the variables in the template-->

											<!--header + text template -->




									<h2 class='attention-voice'><?=$caseStudy['title']?></h2>
									<p class='body-copy'><?=$caseStudy['copy']?></p>

	<?php	 foreach($caseStudy['sections'] as $section) {
								

echo "<p><br>" . var_dump($section) . "</p>";

// For the content of the case study that's in modules:

// 	1)  determine the module for each section
// 	2) based on the module, return the content (by including the needed template)

	// $moduleType = $section['moduleType'];
	// include("templates/modules/$moduleType/template.php");
}

}


} ?>