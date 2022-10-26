<?php include ('functions.php');

echo "this is the update script";

//Add some more error handlers (file size limit, etc) once basic functionality is set up.

if ( isset($_POST['submitted']) ) {

    $highways = getHighways();

    var_dump($highways);

    if($_POST['route-type'] == 'interstate') {
        $name = 'Interstate';
    } elseif($_POST['route-type'] == 'us-route') {
        $name = 'US Route';
    } elseif($_POST['route-type'] == 'state-route') {
        $name = 'State Route';
    }

    

    //Change only the elements of the original array that the user has changed.   


//if some info != original info

    //if there's a $_POst

  

    // $updatedHighway = array(
    //     'id' => 
    //     'type' => $_POST['route-type'],
    //     'number' => $_POST['route-number'],
    //     'name' => $name . " " . $_POST['route-number'],
    //     'length' => $_POST['length-in-miles'],
    //     'startLocation' => $_POST['start-location'],
    //     'endLocation' => $_POST['end-location'],
    //     'description' => $_POST['description'],
    //     'image' => uploadImageFile()
    // );


    foreach($highways as $highway) {
        if($highway['id'] == $_GET['slug']) {
  
    
            //this is the thing that needs to deviate from the original
            // array_push($phpArray, $highway); //($destination_array, $values)








            $encoded = json_encode($highways);

            file_put_contents($filepath, $encoded); //you need to append, not overwrite

            echo "The stuff has been super-updated";
            //here is where to navigate to success.php

            // include('templates/pages/success.php');

            //this page should itself be success.php??
        }
    }
}
