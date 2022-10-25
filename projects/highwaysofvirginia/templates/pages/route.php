<?php



$json = file_get_contents("data/highways.json");
$highways = json_decode($json, true);




foreach($highways as $highway) {

	if( $_GET['slug'] == $highway['id']) {

		echo $highway ['id']; ?>

		<h2><?=$highway['name']?></h2>

		<picture>
			<img src="<?=$highway['image']?>" alt="<?=$highway['name']?>">
		</picture>

		<p><?=$highway['description']?></p>

<!--include extra modules with cool descriptions of cool places later on -->

<?php }

} ?>