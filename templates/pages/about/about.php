<?php include('templates/components/about-navbar.php');

//this will be a function

if( isset($_GET['id']) ) {

	foreach ($pageData as $subpage) {
		$subpageID = $subpage['id'];

		// echo $subpageID;

		if($subpageID == $_GET['id']) {
			include("templates/subpages/" . $subpage['slug'] . ".php");
		}
	}
} else {
	include("templates/subpages/bio.php");
}

?>