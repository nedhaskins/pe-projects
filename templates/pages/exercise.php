<?php
$json = file_get_contents('data/pages/projects.json');
$pageData = json_decode($json, true);
$sections = $pageData['sections'];

?>
<a href="">Back to Exercises for Programmers</a>


<?php
//this will be a function

if( isset($_GET['id']) ) {

	foreach ($section['items'] as $item) {
		$itemID = $item['id'];

		echo $itemID;

		if($itemID == $_GET['id']) {
			include("templates/modules/e4p/" . $item['slug'] . ".php");
		}
	}
} else {
	include("index.php");
}

?>

<!--Uses same logic as the about --> subpage.