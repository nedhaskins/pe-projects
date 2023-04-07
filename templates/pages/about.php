<?php include('templates/components/navbar/about-navbar.php');

//this will be a function

foreach ($pageData as $subpage) {
	$subpageID = $subpage['id'];
	$name = $subpage['name'];
	$updated = $subpage['updated'] ?? false;

	if($subpageID == $_GET['id']) {
		include("templates/subpages/" . $subpage['slug'] . ".php");
	}
}

?>