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


<?php include('templates/components/update-route.php'); ?>




<!--The goal is to popfulate the fields below with the date from the requested single highway.