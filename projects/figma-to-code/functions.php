<?php



function activePage() {
	if( isset ($_GET['page'] ) ) {
		$page = $_GET['page'];
	} else {
		$page = 'home';
	}
}




function pageData() {
	$page = activePage();
	$json = file_get_contents("data/$page.json");
	if (!$json) {
		$pageData = 
	}
}