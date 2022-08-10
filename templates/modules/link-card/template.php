
<?php 

	foreach($sections as $item) {
		$itemSlug = $item['slug'];
		$itemURL = $item['url'];
		$isExternalLink = ($itemURL !== "");
		?>

		<div class='link-card' style=
		'background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?=$item['image']?>");
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;'>

		<!--if the related JSON object has a value for the URL key-->
		<?php if ($isExternalLink) { ?>
			<a class='attention-voice' href="<?=$itemURL?>" target="<?=$itemURL?>">
				<?=$item['name']?>			
			</a>

		<!--if it has an empty value for the URL key-->
		<?php } else { ?>
			<a class='attention-voice' href="<?=$pageData['slug']?>/<?=$item['slug']?>/index.php">
				<?=$item['name']?>
			</a>
		<?php } ?>

			<p><?=$item['description']?></p>
		</div>

<?php } ?>