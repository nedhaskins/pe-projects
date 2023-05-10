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
			<inner-column>
				<article>
					<h1 class='title-voice'><?=$title?></h1>
					<h2><?=$subtitle?></h2>
					<a class='project-link' href="projects/<?=$slug?>/index.<?=$siteXtensionType?>">Link to the project</a> 

					<?php	foreach($htmlContent as $block) {

						$tag = $block['tag'] ?? false;
						$class = $block['class'] ?? false;
						$content = $block['content'] ?? false;
						$imageSource = $block['src'] ?? false;
						$imageCaption = $block['figcaption'] ?? false;

						if($tag === 'figure') {
							echo "<" . $tag . " class=" . $class . ">";
							echo "<picture>";
							echo "<img src='" . $imageSource . "'/>";
							echo "</picture>";
							if($imageCaption == true) {
								echo "<figcaption>" . $imageCaption . "</figcaption>";							
							}

						} elseif($tag === 'ul') {
							echo "<ul>";
							foreach($content as $contentBlock) {
								echo "<li>" . $contentBlock['content'] . "</li>";
							}
							echo "</ul>";
						
						} elseif($tag === 'codepen') {

							$penID = $block['penID'] ?? null;
							$codeType = $block['codeType'] ?? null;

							include('templates/components/codepen-example.php');

						} else {
							echo "<" . $tag . ">";
							echo $content;
						}
						echo "</" . $tag . ">";

					} ?>

					<a class='project-link' href="projects/<?=$slug?>/index.<?=$siteXtensionType?>">Link to the project</a> 
				</article>
			</inner-column>
		</section>
	<?php }
} ?>