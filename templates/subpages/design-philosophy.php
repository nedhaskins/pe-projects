<?php 

$json = file_get_contents('data/pages/about.json');
$pageData = json_decode($json, true);

$sections = $pageData[1]['sections'];

?>

<section class='design-philosophy'>

	<?php foreach($sections as $section) { 

		$header = $section['header'];
		$copy = $section['copy'];
		
		include('templates/modules/header-and-text/template.php');
	} ?>

</section>