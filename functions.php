<?php

function showErrors() {
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
}
// showErrors();

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

//Home page functions.

function fetchStylesheet($page){
  if($page == 'layout') {
    echo "<link rel='stylesheet' href='styles/layout-garden.css'>";
  } else {
    echo "<link rel='stylesheet' href='styles/style.css'>";
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

function fetchBodyContent($page) {
  if($page == 'home' || $page == '404') { ?>
    <body class='landing-404'>
      <header>
        <div class='site-menu'>
          <nav id='navbar' class='navbar'>
            <?php include('templates/components/navbar/main-navbar.php'); ?>
          </nav>
          <div class='logo'>
            <?php include('images/full-logo.svg'); ?>
          </div>
        </div>
      </header>
      <main class='page-content'>
        <?php fetchPage(); ?>
      </main>
    </body>
  <?php } elseif($page == 'layout' && isset($_GET['slug'] ) ) { ?>
    <body class='layout'>
      <main class='page-content'>
        <?php fetchPage(); ?>
      </main>
    </body>
  <?php } elseif($page == 'exercise' && isset($GET['slug'] ) ) { ?>
    <body class='e4p-detail'>
      <main class='page-content'>
        <?php fetchPage(); ?>
      </main>
    </body>
  <?php } else { ?>            
    <body class='index'>
      <header>
        <div class='site-menu'>
          <nav class='navbar'>
            <?php include('templates/components/navbar/main-navbar.php'); ?>
          </nav>
          <div class='logo'>
            <?php include('images/full-logo.svg'); ?>
          </div>
        </div>
      </header>

      <main class='page-content'>
          <?php fetchPage(); ?>
      </main>
    </body>
  <?php }
}

// ^^^come back to this and finish it -- add vanilla JS and Vue options
