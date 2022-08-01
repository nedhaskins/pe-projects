<?php

function currentPage() {
	if( isset ($_GET["page"]) ) {
		return $_GET["page"];
	} else {
		return "home";
		//a built-in default...
	}
}

//function to pull specific JSON elements
//and hold them for the corresponding HTML
function pageData() {
	//assign the variable $page to the current $_GET value 
	$page = currentPage();
	//set up a variable to hold dynamic JSON contents
	$filePath = ("data/pages/$page.json");
	$json = file_get_contents($filePath);
	//if there's no JSON file, return 404
	if(!$json) {
		$json = file_get_contents('data/pages/404.json');
	}
	//set up a variable to hold resulting PHP array
	$pageData = json_decode($json, true);
	//hold this array to be called later	
	return $pageData;
}

function renderPageTemplate() {
	$filePath = "templates/pages/" . "standard" . ".php"; //changed from currentPage();
	$pageData = pageData();
	//this will be used on the template page ^^^
	if( file_get_contents($filePath) ) {
		include($filePath);
	} else {
		include('templates/pages/404.php');
	}
}

//Note how there's one function for each specific task or VERB.  One to render the page, one to render the data on the page, one to $_GET the current page...
