<?php
$json = file_get_contents('data/pages/exercise.json');
$pageData = json_decode($json, true);
$exercises = $pageData['exercises'];


?>


<section class='exercise'>

	<inner-column class='exercise-column'>

		<a class='attention-voice e4p' href="?page=e4p">Back to Exercises for Programmers</a>
<?php
//this will be a function

foreach($exercises as $exercise) {


	if( isset($_GET['slug']) ) {

		$exerciseSlug = $exercise['slug'];


		// echo $itemSlug;

		if($exerciseSlug == $_GET['slug']) {
			include("templates/modules/e4p/" . $exerciseSlug . ".php");
		}
	} else {
	include("index.php");
}

}



?>
	<inner-column>

</section>

<!--Uses same logic as the about  subpage. -->