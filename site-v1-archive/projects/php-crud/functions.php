<?php
	function getJSONData($filepath) {
		$json = file_get_contents($filepath);
		$data = json_decode($json, true);
		return $data;
	}