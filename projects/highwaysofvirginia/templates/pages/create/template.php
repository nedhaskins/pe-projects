<?php

$highways = getHighways();

$routeType = "";
$number = "";
$lengthInMiles = "";
$startLocation = "";
$endLocation = "";
$routeImage = "";
$description = "";
$buttonMessage = 'Add route';

include('templates/components/form.php');

if ( isset($_POST['submitted']) ) {

    if($_POST['route-type'] == 'interstate') {
        $name = 'Interstate';
    } elseif($_POST['route-type'] == 'us-route') {
        $name = 'US Route';
    } elseif($_POST['route-type'] == 'state-route') {
        $name = 'State Route';
    }

    $highway = array(
        'type' => $_POST['route-type'],
        'number' => $_POST['route-number'],
        'name' => $name . " " . $_POST['route-number'],
        'length' => $_POST['length-in-miles'],
        'startLocation' => $_POST['start-location'],
        'endLocation' => $_POST['end-location'],
        'description' => $_POST['description'],
        'image' => uploadImageFile()
    );

    $highways[uniqid('route')] = $highway;

    $encoded = json_encode($highways);

    if( file_put_contents('data/highways.json', $encoded) ) {
       include('templates/pages/success.php');
       // header("Location: templates/pages/success.php");
    }
}

?>

<button>
    <a href='?page=route-list'>Back to route list</a>
</button>

<button>
    <a href="?page=home">Back to home page</a>
</button>