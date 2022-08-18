

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






<?php


$sections = $pageData['sections'];


foreach($sections as $section) {
	$hasCaseStudy = ($caseStudy != "");

	if($hasCaseStudy) {

	 ?>





}}







## Stuff to add to the site / styling to-do list

- [ ] Animate the windmill

- [ ] Some kind of checkered div line to separate modules in the style guide

- [ ] Add "case-study" logo to link-cards

- [ ] Any properties that could use global variables?

- [ ] Edit e4p SVGs to have light and dark mode

- [ ] Light-and-dark mode toggle for whole site, to be put in site-menu









<!-- <?php //foreach($pageData['sections'] as $section) {

	//include('templates/modules/'.$section['type']. "/template.php");

 } ?> -->

 ^^^ style-guide logic








