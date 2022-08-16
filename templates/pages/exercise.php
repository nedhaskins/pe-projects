<?php
$json = file_get_contents('data/pages/e4p.json');
$pageData = json_decode($json, true);
$sections = $pageData['sections'];


?>
<a href="?page=e4p">Back to Exercises for Programmers</a>

<section class='exercise'>
<?php
//this will be a function

foreach($sections as $section) {


if( isset($_GET['slug']) ) {

	foreach ($section['items'] as $item) {
		$itemSlug = $item['slug'];

		// echo $itemSlug;

		if($itemSlug == $_GET['slug']) {
			include("templates/modules/e4p/" . $item['slug'] . ".php");
		}
	}
} else {
	include("index.php");
}

}

?>


</section>

<!--Uses same logic as the about  subpage. -->