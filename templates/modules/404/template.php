<?php



	if($_GET['page'] == 'style-guide') {
		$header = $module['header'];
		$copy = $module['copy'];


	} else {
		$header = $pageData['header'];
		$copy = $pageData['copy'];
	}



 ?>

<section class='four-oh-four'>

	<text-wrapper>
		<h1 class='title-voice'><?=$header?></h1>
		<h2 class='attention-voice'><?=$copy?></h2>
	</text-wrapper>

</section>