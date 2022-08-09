<!-- 
	 -->





	
<?php

if( isset($_GET['slug']) ) {	

	foreach ($list as $item) {
		$itemSlug = $item['slug'];
		$itemURL = $item['url'];

		//These both have to be defined in the loop,
		//as they're unique to each object.
		// echo $itemSlug;
		// echo $itemURL;

		if($itemSlug == $_GET['slug']) {

			if($itemURL == "") {
				include("the-lab/" . $itemSlug . "/index.php");
			} else {
				header("Location: " . $itemURL);
				exit;
			}
		}
	}
}