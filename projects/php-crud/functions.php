<?php
	function getJSONData($filepath) {
		$json = file_get_contents($filepath);
		$data = json_decode($json, true);
		return $data;
	}

	function showErrors() {
		ini_set('display_errors', '1');
  		ini_set('display_startup_errors', '1');
  		error_reporting(E_ALL);
	}
	
	showErrors();