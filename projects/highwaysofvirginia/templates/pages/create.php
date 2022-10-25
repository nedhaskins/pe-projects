<?php //include('functions.php');


$routeType = "";
$routeNumber = "99";
$lengthInMiles = "99";
$startLocation = "Start location";
$endLocation = "End location";
$routeImage = "images/US_522.svg";

if ( isset($_POST['submitted']) ) {

    $filepath = 'data/highways.json';
    $json = file_get_contents($filepath);
    $phpArray = json_decode($json, true) ?? [];

    if($_POST['route-type'] == 'interstate') {
        $name = 'Interstate';
    } elseif($_POST['route-type'] == 'us-route') {
        $name = 'US Route';
    } elseif($_POST['route-type'] == 'state-route') {
        $name = 'State Route';
    }

    $highway = array(
        'id' => uniqid('highway'),
        'type' => $_POST['route-type'],
        'number' => $_POST['route-number'],
        'name' => $name . " " . $_POST['route-number'],
        'length' => $_POST['length-in-miles'],
        'startLocation' => $_POST['start-location'],
        'endLocation' => $_POST['end-location'],
        'description' => $_POST['description'],
        'image' => uploadImageFile()
    );

    //this is the thing that needs to deviate from the original
    array_push($phpArray, $highway); //($destination_array, $values)

    $encoded = json_encode($phpArray);

    if( file_put_contents($filepath, $encoded) ) { //you need to append, not overwrite

    	echo "Success! Everything worked, brah. :))))";
   	header("Location: templates/pages/success.php");
    
    } 


    //here is where to navigate to success.php

    // include('templates/pages/success.php');

    //this page should itself be success.php??
}

?>



<h1>Create New Route</h1>

<?php include('templates/components/form.php'); ?>