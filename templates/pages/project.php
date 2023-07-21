<!--For projects without a case study.-->

<?php
	$sections = $pageData['sections'];
?>

<section class='project'>

<?php

//I need only the specified template to return here.



//this will be a function


foreach($sections as $section) {

	if($section['slug'] == $_GET['slug']) {
		include("projects/" . $section['slug'] . "/index." . $section['extensionType']);
		} //  else {
		// 		include("index.php");
		// }
	} ?>


</section>

<!--Uses same logic as the about subpage. -->





if

include [slug].[extensionType]