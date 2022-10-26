<?php

$routeType = "";
$number = "99";
$lengthInMiles = "99";
$startLocation = "Start location";
$endLocation = "End location";
$routeImage = "images/US_522.svg";
$description = "Add a description";
$buttonMessage = 'Add route';

include('templates/components/form.php');

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

    array_push($phpArray, $highway);

    $encoded = json_encode($phpArray);

    if( file_put_contents($filepath, $encoded) ) {
       include('templates/pages/success.php');
       // header("Location: templates/pages/success.php");
    }
}



?>

