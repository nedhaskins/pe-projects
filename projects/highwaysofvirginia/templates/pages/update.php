<?php

$slug = $_GET['slug'] ?? false;




?>

<h1>Update Route Page</h1>

<h3>List of current routes</h3>

<!--pull names of all routes from the JSON object and put them into a list-->

<ul>

	<?php
		$json = file_get_contents("data/highways.json");
		$highways = json_decode($json, true);



		foreach($highways as $highway) { ?>
			<li>
				<a href="?page=update&slug=<?=$highway['id']?>"><?=$highway['name']?></a>
			</li>
	<?php } ?>

</ul>


<?php

$buttonMessage = 'Update route';

$highway = getHighwayById($slug);

$type = $highway['type'];
$number = $highway['number'];
$lengthInMiles = $highway['length'];
$startLocation = $highway['startLocation'];
$endLocation = $highway['endLocation'];
$routeImage = $highway['image'];
$description = $highway['description'];

if (isset($_POST['submitted']) ) {

	

   foreach($highway as $key => $value) {
     if( $_POST[$key] == $value ) {
     		$highway[$key] = $value;
         //if it matches the original value
     } else {
         $highway[$key] == $_POST[$key];
     }
 	}
}
//if the form is submitted -- figure out how to amend array to add new changes!!!!

?>

<?php include('templates/components/form.php'); ?>




<!--The goal is to popfulate the fields below with the date from the requested single highway.