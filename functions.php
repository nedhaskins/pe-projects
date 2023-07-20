<?php

function showErrors() {
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
}
showErrors();

function queryString() {
	return $_SERVER['QUERY_STRING'];
}

function show($things) { //$things = any set variable
  echo "<code class='show-code'>";
  echo '<pre>';
  print_r($things);
  echo '</pre>';
  echo '</code>';
  }

function activePage() {
  if( isset($_GET['page']) ) {
    return $_GET['page'];
  } else {
    return "home";
  }
}

function getPageData() {
  $page = activePage();
  $filepath = ("data/pages/$page.json");
  $json = file_get_contents($filepath);
  if(!$json) {
    $json = file_get_contents('data/pages/404.json');
  }
  $pageData = json_decode($json, true);
  //hold this array to be called later  
  return $pageData;
}

function fetchPage() {
  $filepath = "templates/pages/" . activePage() . ".php";
  $pageData = getPageData();
  if( file_exists($filepath) ) {
    include($filepath);
  } else { 
    http_response_code(404);
    include('templates/pages/404.php');
    die();
  }
}

function returnLayoutPage($sections) {
  foreach($sections as $section) {
    if($section['slug'] == $_GET['slug']) { ?>
      <section class='<?=$section['slug']?>'>
        <?php include("templates/modules/layouts/" . $section['slug'] . "/template.php");
      echo "</section>";
    }
  }
}