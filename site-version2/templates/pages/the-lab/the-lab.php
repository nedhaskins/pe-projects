<?php

$list = $pageData['unordered-list'];

?>


<section class='the-lab'>

<h2 class='attention-voice'>the lab</h2>
<p class='body-copy'>I'm always experimenting. Here are some things I've got in the works.</p>


<?php 

foreach($list as $item) {
	$itemSlug = $item['slug'];
	$itemURL = $item['url'];
	$isExternalLink = ($itemURL !== "");
	?>

	<div class='lab-item' style=
	'background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?=$item['image']?>");
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;'>

	<!--if the related JSON object has am empty value for the URL key-->
	<?php if ($isExternalLink) { ?>
		<a class='attention-voice' href="<?=$itemURL?>" target="<?=$itemURL?>">
			<?=$item['name']?>			
		</a>

	<!--if it has a value for the URL key-->
	<?php } else { ?>
		<a class='attention-voice' href="the-lab/<?=$item['slug']?>">
			<?=$item['name']?>
		</a>
	<?php } ?>

		<p><?=$item['description']?></p>
	</div>

<?php } ?>
 
</section>

