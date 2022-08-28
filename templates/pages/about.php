<?php include('templates/components/about-navbar.php');


//this will be a function

if( isset($_GET['id']) ) {
	foreach ($pageData as $section) {
		$sectionID = $section['id'];

		// echo $subpageID;

		if($sectionID == $_GET['id']) {
			include("templates/subpages/" . $section['slug'] . ".php");
		}
	}
} else {
	
	$_GET['id'] = 1;

	include("templates/subpages/bio.php");
}

?>