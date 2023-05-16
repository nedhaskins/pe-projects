<?php
$currentHighwayId = $_GET['slug'];
$highway = getHighwayById($currentHighwayId);
$highwayShield = $highway['image'] ?? false;
$response = '';

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
		'image' => uploadImageFile() ?? $highwayShield,
	);

	$highways = getHighways();
	$highways[$currentHighwayId] = $highway;

	$json = json_encode($highways);
	file_put_contents('data/highways.json', $json);
	
	$response = 'The route was successfully updated!';

} ?>

<section class="update-page">
	<page-left>
		<text-wrapper>
			<h2 class='page-title'>Update Route Info</h2>
		</text-wrapper>
		<div class="photo-and-array">
			<picture class="update-photo">
				<img src="<?=$highway['image']?>" alt="todo">
			</picture>
			<?php show($highway); ?>
			<p class='success'><?=$response?></p>
		</div>
	</page-left>
	<page-right>
		<?php include('templates/components/form/template.php'); ?>
	</page-right>
</section>