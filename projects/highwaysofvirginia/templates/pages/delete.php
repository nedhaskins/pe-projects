<h3>Delete Route Page</h3>

<?php

$highways = getHighways();

$currentHighwayId = $_GET['slug'];

foreach( $highways as $highwayId => $highwayData) {
	if( $currentHighwayId == $highwayId) {
		unset($highways[$currentHighwayId]);
		saveDatabase($highways);

		$deletedData = $highwayData;
	}	
}

if( isset($deletedData) ) {
		echo $deletedData['name'] . " was taken out of the database.";
	}
?>
<button>
	<a href="?page=home">Back to home page</a>
</button>