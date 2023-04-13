<?php
$hasCaseStudy = $hasCaseStudy ?? false;
$isExternalLink = $isExternalLink ?? false;
$image = $link['image'] ?? "images/collage.jpg";
?>

<div class='link-card' style=
	'background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url("<?=$image?>");
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;'>

	<?php if($_GET['page'] == 'style-guide') { ?>
		<a class='attention-voice' href="#">
			<h2 class="title-voice"><?=$name?></h2>
			<p><?=$description?></p>
		</a>

	<!--if it is a local project and has no case study-->
	<?php } elseif (!$hasCaseStudy && !$isExternalLink) { ?>
		<a class='attention-voice' href="?page=<?=$slug?>">
			<h2 class="title-voice"><?=$name?></h2>
			<p><?=$description?></p>
		</a>

	<!--if it is a local project and has a case study-->
	<?php } elseif ($hasCaseStudy && !$isExternalLink) { ?>
		<a class='attention-voice' href="?page=case-study&slug=<?=$slug?>" target="">
			<h2 class="title-voice"><?=$name?></h2>
			<p><?=$description?></p>
		</a>

	<!--if it's an external link'-->
	<?php } elseif ($isExternalLink) { ?>
		<a class='attention-voice' href="<?=$url?>" target="<?=$url?>">
			<h2 class="title-voice"><?=$name?></h2>
			<p><?=$description?></p>
		</a>

	<?php } else {
		include('templates/pages/404.php');
	} ?>
</div>