<section class='<?=$pageData['slug']?>'>

	<h2 class='attention-voice'><?=$pageData['title']?></h2>
	<p class='body-copy'><?=$pageData['intro']?></p>






</section>



So what will this page do?

This page will pull in the individual styles for each module, and the JSON file will hold data for each module the same way it does for the actual page content.


<!--HEADER + TEXT-->




<!--SUBHEADER + TEXT-->

This is used for copy and subtopics within a broader topic.


<!--GOALS-->


<li class='goal-section'>
	<h3 class='attention-voice'><?=$section["heading"]?></h3>
		<ul>
			<?php foreach ($section["goals"] as $goal) { ?>
				<li class='goal-item'><?=$goal?></li>
			<?php } ?>
		</ul>
</li>



<!--RESUME-->