
<?php 

	foreach($sections as $item) {
		$itemSlug = $item['slug'];

		$itemURL = $item['url'];
		$isExternalLink = ($itemURL !== "");
		$caseStudy = $item['caseStudy'];
		$hasCaseStudy = ($caseStudy != []); //brackets needed here...because the object's been translated into a PHP array

		?>

		<div class='link-card' style=
		'background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?=$item['image']?>");
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;'>

	
		<!--if it is a local project and has no case study-->
		<?php if (!$hasCaseStudy && !$isExternalLink) { ?>
			<a class='attention-voice' href="<?=$pageData['slug']?>/<?=$item['slug']?>/index.php">
				<?=$item['name']?>
			</a>

		<!--if it is a local project and has a case study-->
		<?php } elseif ($hasCaseStudy && !$isExternalLink) { ?>
			<a class='attention-voice' href="?page=case-study&slug=<?=$item['slug']?>" target="">
				<?=$item['name']?>			
			</a>

		<!--if it's an external link'-->
		<?php } elseif ($isExternalLink) { ?>
			<a class='attention-voice' href="<?=$itemURL?>" target="<?=$itemURL?>">
				<?=$item['name']?>			
			</a>

		<?php } else {
			include('templates/pages/404.php');
		} ?>

			<p><?=$item['description']?></p>
		</div>

<?php } ?>