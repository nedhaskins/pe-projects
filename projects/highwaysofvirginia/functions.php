<?php

function showErrors() {
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);
}

showErrors();

function show($things) { //$things = any set variable
	echo "<code class='show-code'>";
	echo '<pre>';
	print_r($things);
	echo '</pre>';
	echo '</code>';
}

function getHighways() {
	$filepath = 'data/highways.json';
	$json = file_get_contents($filepath);
	return json_decode($json, true);
} 

function getHighwayById($id) {
	$highways = getHighways();
	foreach($highways as $highwayId => $highwayData) {
		if($highwayId == $id) {
			return $highwayData;
		}
	}
}

function encodeJSON($phpArray) {
	$encoded = json_encode($phpArray);
	return($encoded);
}

function uploadImageFile() {

	$file = $_FILES['image-file'];

	//getting all the info out of the array
	$fileName = $file['name'];
	$fileTmpName = $file['tmp_name'];
	$fileSize = $file['size'];
	$fileError = $file['error'];
	$fileType = $file['type'];  


	//specifying which file types are allowed
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower( end($fileExt) );
	$allowed = array('jpg', 'jpeg', 'png', 'svg');

	// print_r($_FILES);

	if( in_array($fileActualExt, $allowed) ) {
		if($fileError === 0) {  
			if($fileSize < 500000) {
          
          //now we can start uploading after all the checks
				$fileNameNew = uniqid('', true) . "." . $fileActualExt;
				$fileDestination = "images/$fileNameNew";

				//now move the file from the tmp folder to the destination folder
				move_uploaded_file($fileTmpName, $fileDestination);

				return $fileDestination;

			} else {
				echo "Your file is too big, brah. :/";
			}
		} else {
        echo "There was an error uploading this file!! :/";
      }
	} else {
      echo "You can't upload this type of file here. :/";
	}
}		

function initializeDatabase() {
	if ( !file_get_contents('data/highways.json') ) {
		$phpArray = [];
		$json = json_encode($phpArray);
		file_put_contents("data/highways.json", $phpArray);
	} else {
		return getHighways();
	}
}