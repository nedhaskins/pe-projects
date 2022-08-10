<!--This page is for both the projects and lab landing pages.

	Depending on the name of the JSON file, the right file will be pulled and the following data can be pulled from that.  The link-card below also will be dependent on the specific JSON file called here. -->

<section class='<?=$pageData['slug']?>'>

<h2 class='attention-voice'><?=$pageData['title']?></h2>
<p class='body-copy'><?=$pageData['intro']?></p>


<?php foreach($pageData['sections'] as $section) {
	include('link-card.php');  
} ?>


</section>