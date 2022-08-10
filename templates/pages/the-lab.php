<?php
$sections = $pageData['sections'];
?>

<section class='<?=$pageData['slug']?>'>

	<h2 class='attention-voice'><?=$pageData['title']?></h2>
	<p class='body-copy'><?=$pageData['intro']?></p>
	
	<?php 
		include('templates/modules/link-card/template.php');  
	?>
 
</section>

