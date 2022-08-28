<?php include('templates/components/about-navbar.php');

//this will be a function

foreach ($pageData as $section) {
	$sectionID = $section['id'];

	if($sectionID == $_GET['id']) {
		include("templates/subpages/" . $section['slug'] . ".php");
	}
}

?>