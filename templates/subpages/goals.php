
<?php

$json = file_get_contents('data/pages/about.json');
$pageData = json_decode($json, true);
//change to an if statement that grabs the ID
//when you refactor this!

$goals = $pageData[3];
$sections = $goals['sections'];

?>

<section class='goals'>

	<h1 class='attention-voice'><?=$goals['name']?></h1>
	<h3 class='attention-voice'><?=$goals['updated']?></h3>

<div class='line'></div>





		<?php foreach ($sections as $section) {
			
			include("templates/modules/goals-module/template.php");

		} ?>

</section>