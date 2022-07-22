<?php include('page-header.php'); ?>


<?php

foreach($pageData['sections'] as $section) {

	if( $section['module'] == 'generic_text') {
		include('partials/page-section.php');
	}

	if( $section['module'] == 'things_grid') {
		include('partials/things-grid.php');
	}


	
}






//Knowing the REAL filepath is important here.  This script is actually running in the index.php file, which means the filepath will be related to the index.php file, NOT this one!

?>