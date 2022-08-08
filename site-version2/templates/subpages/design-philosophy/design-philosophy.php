<!-- 
<link rel="stylesheet" href='../../../styles/site.css'> -->




<?php 

$json = file_get_contents('data/pages/about.json');
$pageData = json_decode($json, true);

$designSections = $pageData[1]['sections'];

?>

<section class='design-philosophy'>

	<?php
	foreach($designSections as $section) { ?>
		<h2 class='attention-voice'><?=$section['header']?></h2>
			<?php foreach($section['copy'] as $copy) { ?>
				<p class='body-copy'><?=$copy?></p>
			<?php }
	} ?>

</section>