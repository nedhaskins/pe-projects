<?php

$json = file_get_contents('data/pages/case-study.json');
$pageData = json_decode($json, true);
$caseStudies = $pageData;

function linkToProject($url, $slug, $siteXtensionType) {
	if ( isset($url) ) {
		echo "<a class='project-link' href='" . $url . "'>Link to the project</a>"; 
	} else {
		echo "<a class='project-link' href='projects/" . $slug . "/index." . $siteXtensionType . "'>Link to the project</a>";
	}
}

foreach($caseStudies as $caseStudy) {

	$slug = $caseStudy['slug'];
	$siteXtensionType = $caseStudy['siteXtensionType'];
	$title = $caseStudy ['title'];
	$subtitle = $caseStudy ['subtitle'];
	$htmlContent = $caseStudy['htmlContent'];

	$url = $caseStudy ['url'] ?? false;
	
	if($caseStudy['slug'] == $_GET['slug']) { ?>

		<section class='case-study'>
			<inner-column>
				<article>
					<h1 class='case-study-title'><?=$title?></h1>

					<div class='subtitle-wrapper'>
						<h2><?=$subtitle?></h2>
						<?php linkToProject($url, $slug, $siteXtensionType); ?>
					</div>
					
					<?php	foreach($htmlContent as $block) {

						$tag = $block['tag'] ?? false;
						$class = $block['class'] ?? false;
						$content = $block['content'] ?? false;
						$imageSource = $block['src'] ?? false;
						$imageCaption = $block['figcaption'] ?? false;

						if($tag === 'figure') {
							echo "<figure>";
							echo "<picture class='" . $class . "'>";
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

						} elseif($tag === 'codepen') {
							
							$penID = $block['penID'] ?? null;
							$codeType = $block['codeType'] ?? null;
							include('templates/components/codepen-example.php');

						} elseif($tag == 'codeblock') {

							$filepath = $block['filepath'];
								include($filepath);

						} elseif($tag === 'details') {
							echo "<details>";
							foreach($content as $contentBlock) {
								//If the content block has a tag of "summary"
								if($contentBlock['tag'] === 'summary') {
									echo "<summary>";
									//loop through the items and render each of them
									echo "<svg-wrapper>";
									include('images/windmill.svg');
									echo "</svg-wrapper>";
									foreach($contentBlock['content'] as $item) {
										echo "<" . $item['tag'] . " class='" . $item['class'] . "'>";
										echo $item['content'];
										echo "</" . $item['tag'] . ">";
									}
									echo "</summary>";
								} else {
									echo "<" . $contentBlock['tag'] . " class=" . $contentBlock['class'] . ">";
									echo $contentBlock['content'];
									echo "</" . $contentBlock['tag'] . ">"; 
								}
							}			
							echo "</details>";

						//The catch for all other tags.
						} else {
							echo "<" . $tag . " class=" . $class . ">";
							echo $content;
						}
						echo "</" . $tag . ">"; //this catches all of the possible tag endings

					} ?>

					<?php linkToProject($url, $slug, $siteXtensionType); ?>

				</article>
			</inner-column>
		</section>
	<?php }
} ?>