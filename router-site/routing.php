<?php

function currentPage() {
	if( isset ($_GET["page"]) ) {
		return $_GET["page"];
	} else {
		return "home";
	}
}

//function to pull specific JSON elements
//and put them in the corresponding HTML
function pageData() {
	$page = currentPage();
	$filePath = ("data/$page.json");
	$json = file_get_contents($filePath);
	if(!$json) {
		$json = file_get_contents('data/404.json');
	}
	$pageData = json_decode($json, true);	
	return $pageData;
}

function renderPageTemplate() {
	$filePath = "pages/" . "standard" . ".php"; //changed from currentPage();
	$pageData = pageData();
	if( file_get_contents($filePath) ) {
		include($filePath);
	} else {
		include('pages/404.php');
	}
}


//Note how there's one function for each specific task or VERB.  One to render the page, one to render the data on the page, one to $_GET the current page...
