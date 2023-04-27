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

$response = "";

?>

<section class="create-route">
    <page-left>
        <text-wrapper>
            <h2 class="page-title">Create New Route</h2>
        </text-wrapper>

        <?php

            include('templates/components/form/template.php');

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
                   // include('templates/pages/success/template.php');
                  $response = "<p class='success'>" . $highway['name'] . " was uploaded to the database.";
                   // header("Location: templates/pages/success.php");
                }
            }

        ?>

    <p class='success'><?=$response?></p>

</page-left>
<page-right class='photos'>
    <picture class='stock-photo'><img src="images/minneapolis-1.jpeg"></picture>
    <picture class='stock-photo'><img src="images/us-11-photo.jpg"></picture>
    <picture class='stock-photo'><img src="images/va-20-photo.jpeg"></picture>
</page-right>
</section>