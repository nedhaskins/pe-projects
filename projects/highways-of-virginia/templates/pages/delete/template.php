<?php

$highways = getHighways();
$currentHighwayId = $_GET['slug'];

?>

<section class="route-deleted">


<?php

foreach( $highways as $highwayId => $highwayData) {
	if( $currentHighwayId == $highwayId) {
		unset($highways[$currentHighwayId]);
		saveDatabase($highways);

		$deletedData = $highwayData;
	}	
}

if( isset($deletedData) ) {
		echo "<p class='success' style='font-size: 32px;'>" . $deletedData['name'] . " was taken out of the database.</p>";
	}
?>
<button-wrapper>
	<button>
		<a href="?page=home">Back to home page</a>
	</button>
</button-wrapper>

</section>