<?php
$json = file_get_contents('data/pages/layout.json');
$pageData = json_decode($json, true);
$sections = $pageData['sections'];




?>
<a href="?page=layout-garden">Back to Layout Garden</a>

<section class='layout'>
<?php
//this will be a function


foreach($sections as $section) {

	if( isset($_GET['slug']) ) {

		$sectionSlug = $_GET['slug'];

		if($sectionSlug == $_GET['slug']) {
			include("templates/modules/layouts/" . $sectionSlug . "/index.php");
		} else {
				include("index.php");
		}
	}
} ?>


</section>

<!--Uses same logic as the about --> subpage.