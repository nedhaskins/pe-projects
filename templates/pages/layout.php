<?php
$json = file_get_contents('data/pages/layout.json');
$pageData = json_decode($json, true);
$sections = $pageData['sections'];

?>
<a href="?page=layout-garden">Back to Layout Garden</a>

<section class='layout'>
<?php

//I need only the specified template to return here.



//this will be a function


foreach($sections as $section) {

		if($section['slug'] == $_GET['slug']) {
			include("templates/modules/layouts/" . $section['slug'] . "/template.php");
		} //  else {
		// 		include("index.php");
		// }
	} ?>


</section>

<!--Uses same logic as the about subpage. -->