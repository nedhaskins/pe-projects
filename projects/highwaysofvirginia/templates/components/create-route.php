<?php //include('functions.php');


$routeType = "";
$routeNumber = "99";
$lengthInMiles = "99";
$startLocation = "Start location";
$endLocation = "End location";
$routeImage = "images/US_522.svg";

// $hasRouteType = false;
// $hasRouteName = false;
// $hasLengthInMiles = false;
// $hasStartLocation = false;
// $hasEndLocation = false;

// $routeTypeError = false;
// $routeNumberError = false;
// $lengthInMilesError = false;
// $startLocationError = false;
// $endLocationError = false;

// $routeTypeError = 'please enter a route type';
// $routeNumberError = 'please enter a route number';








//if everything has been entered / has a value

//package everything into the data object

//push the array to the JSON object




//navigate to the success page (and this template will be populated
//with the image that was just pushed...and a confirm statement)





?>

<form action="php-scripts/create-script.php" method="POST"
enctype="multipart/form-data">



    <field>
        <input type="file" name="image-file">

    </field>

    <field>
        <label>Route Type</label>
        <select name="route-type" id="route-type" required>
            <option value="" selected="true" disabled>What type of route is this?</option>
            <option value="interstate" selected>Interstate</option>
            <option value="state-route">State Route</option>
            <option value="us-route">US Route</option>
        </select>
    </field>

    <field>
        <label>Route Number</label>
        <input name='route-number' type='number' min="1" max="999" value='<?=$routeNumber?>' required>
    </field>
        <field>
        <label>Length in Miles</label>
        <input name='length-in-miles' type='number' value='<?=$lengthInMiles?>' required>
    </field>

    <field>
        <label>Starting Location</label>
        <input name='start-location' type='text' value='<?=$startLocation?>' required>
    </field>

    <field>
        <label>End Location</label>
        <input name='end-location' type='text' value='<?=$endLocation?>' required>
    </field>

    <field>
        <label>Descrption</label>
        <textarea cols=32 rows=10 name='description' type='text' value='' required></textarea>
    </field>


    <button class='route-button' type="submit" name='submitted'>Add route</button>


</form>


<picture></picture>