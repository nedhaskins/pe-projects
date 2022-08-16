
<?php

$json = file_get_contents('data/pages/about.json');
$pageData = json_decode($json, true);
//change to an if statement that grabs the ID
//when you refactor this!

$goalSections = $pageData[3]['sections'];

?>

<section class='goals'>

	<h1 class='attention-voice'>goals</h1>
	<h3 class='attention-voice'>updated August 2, 2022</h3>

	<div class='line'></div>

	<ul class='goal-list'>

		<?php foreach ($goalSections as $section) {
			
			include("templates/modules/goals-module/template.php");

		} ?>

	</ul>

</section>