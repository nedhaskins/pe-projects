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

Here's why you needed the isset in the above.

When you wrote this, the JSON function that defined the slug didn't come from another file or function.  The page was isolated, so it had to be defined in the same page.  And it hadn't been defined yet.

Now that it's defined in an outside page, the isset doesn't need to be on this page anymore.

Looks like you didn't need the isset after all in the other one.  The errors came back only on the home page, and those wouldn't show normally.