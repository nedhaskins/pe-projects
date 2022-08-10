

~strike-thru~

<?php

if( isset($_GET['slug']) ) {	<------NOT NEEDED - the home page can do without it!  It's a silent error if this isn't here.

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

Looks like you didn't need the isset after all in the other one.  The errors came back only on the home page, and those wouldn't show normally.

Those error messages were throwing you off!  Users won't always see those.