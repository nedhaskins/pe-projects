<?php

function queryString() {
	return $_SERVER['QUERY_STRING'];


}

function getPageTemplate() {
	$filePath = "pages/" . currentPage() . ".php"; 
	if( file_get_contents($filePath) ) {
		include($filePath);
	} else {
		include('pages/404.php');
	}
}

function currentPage() {
	if( isset ($_GET["page"]) ) {
		return $_GET["page"];
	} else {
		return "home";
	}
}
