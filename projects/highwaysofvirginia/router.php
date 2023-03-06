<?php

if ( isset($_GET['page']) ) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}

function pageTemplate($page){
	if($page == 'home') {
		include('templates/pages/home/template.php');
	}

	if($page == 'create') {
		include('templates/pages/create/template.php');
	}

	if($page == 'route') {
		include('templates/pages/route-detail/template.php');
	}

	if($page == 'route-list') {
		include('templates/pages/route-list/template.php');
	}

	if($page == 'update') {
		include('templates/pages/update/template.php');
	}

	if($page == 'delete') {
		include('templates/pages/delete/template.php');
	}

	if($page == 'success') {
		include('templates/pages/success/template.php');
	}
}