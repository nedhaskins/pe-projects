<?php
$json = file_get_contents('data/pages/layout.json');
$pageData = json_decode($json, true);
$sections = $pageData['sections'];

?>
<a href="?page=layout-garden">Back to Layout Garden</a>


<?php

//I need only the specified template to return here.



//this will be a function


foreach($sections as $section) {

	if($section['slug'] == $_GET['slug']) { ?>

		<section class='<?=$section['slug']?>'>

			<?php	include("templates/modules/layouts/" . $section['slug'] . "/template.php");
			} ?>


<!-- 			//  else {
			// 		include("index.php");
			// } -->

		</section>

<?php } ?>



<!--Uses same logic as the about subpage. -->