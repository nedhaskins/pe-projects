<?php

$json = file_get_contents('data/pages/case-study.json');
$pageData = json_decode($json, true);
$caseStudies = $pageData;

foreach($caseStudies as $caseStudy) {

	$slug = $caseStudy['slug'];
	$siteXtensionType = $caseStudy['siteXtensionType'];
	$title = $caseStudy ['title'];
	$subtitle = $caseStudy ['subtitle'];
	$htmlContent = $caseStudy['htmlContent'];
	

	if($caseStudy['slug'] == $_GET['slug']) { ?>

		<section class='case-study'>

			<a class='linktype-1' href='?page=projects'>Back to Projects</a>

			<h2 class='attention-voice case-study'><?=$title?></h2>
			<p class='body-copy case-study'><?=$subtitle?></p>

			<?php	foreach($htmlContent as $block) {

				$tag = $block['tag'] ?? false;
				$content = $block['content'] ?? false;
				$imageSource = $block['src'] ?? false;
				$imageCaption = $block['figcaption'] ?? false;

				echo "<" . $tag . ">";

				if($tag === 'picture') { 
					echo "<img src='" . $imageSource . "'/>";
					echo "<figcaption>" . $imageCaption . "</figcaption>";

				} elseif($tag === 'ul') {
					foreach($content as $contentBlock) {
						echo "<" . $contentBlock['tag'] . ">" . $contentBlock['content'] . "</" . $contentBlock['tag'] . ">";
					}
				} else {
					echo $content;
				}

				echo "</" . $tag . ">";
			} ?>

			<!--Why is this class here?-->
			<a class='linktype-1' href="projects/<?=$slug?>/index.<?=$siteXtensionType?>">Link to the project</a> 

		</section>
	
	<?php }

	} ?>