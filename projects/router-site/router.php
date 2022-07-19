//create router that loads templates based on the links that get clicked 





<?php
	$page = null;

	if( isset($_GET['page']) ) {
		$page = $_GET['page']; // url?page=string
	} else {
		$page = 'home'; //default
	}

	//the above deals with what key-value pairs show in in the URL

	function getTemplate($page) {
		include($page . ".php");
	}

?>