<?php

if ( isset($_GET['page']) ) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}

function pageTemplate($page){
	if($page == 'home') {
		include('templates/pages/home.php');
	}

	if($page == 'create') {
		include('templates/pages/create.php');
	}

	if($page == 'route') {
		include('templates/pages/route.php');
	}

	if($page == 'route-list') {
		include('templates/pages/route-list.php');
	}

	if($page == 'update') {
		include('templates/pages/update.php');
	}

	if($page == 'delete') {
		include('templates/pages/delete.php');
	}

	if($page == 'success') {
		include('templates/pages/success.php');
	}
}