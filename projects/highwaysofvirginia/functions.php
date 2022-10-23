<?php

function showErrors() {
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
}
showErrors();


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

          /*----------*/

          //PART 2  
          //get the address of the physical location and put it into
          //the JSON object.


          // $filepath = 'data/highways.json';
          // $jsonFile = file_get_contents($filepath);
          // $highways = json_decode($jsonFile, true) ?? [];
          
          //Now begin to populate the database with the info!

          // $imageKeyValue = array(
          //   'image' => $fileDestination);

          // array_push($highways, $imageKeyValue);
       


          //encode the array into JSON format
          // $encoded = json_encode($highways);
          // file_put_contents($filepath, $encoded); //array to string conversion?

          // header("Location: index.php?uploadsuccess");

          // var_dump($encoded);

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


function createFileName() {

//The image was just moved to




}










function initializeDatabase()
{
    if (!file_get_contents('data/highways.json')) {
        $phpArray = [];
        $json = json_encode($phpArray);
        file_put_contents("data/highways.json", $phpArray);
    } else {
        return getHighways();
    }
}






function getHighways()
{
    $json = file_get_contents("data/highways.json");
    $data = json_decode($json, true);
    return $data;
}


