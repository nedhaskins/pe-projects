

	


		<div class='link-card' style=
		'background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?=$image?>");
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;'>

	
		<!--if it is a local project and has no case study-->
		<?php if (!$hasCaseStudy && !$isExternalLink) { ?>
			<a class='attention-voice' href="?page=<?=$slug?>">
				<?=$name?>
			</a>

		<!--if it is a local project and has a case study-->
		<?php } elseif ($hasCaseStudy && !$isExternalLink) { ?>
			<a class='attention-voice' href="?page=case-study&slug=<?=$slug?>" target="">
				<?=$name?>			
			</a>

		<!--if it's an external link'-->
		<?php } elseif ($isExternalLink) { ?>
			<a class='attention-voice' href="<?=$url?>" target="<?=$url?>">
				<?=$name?>			
			</a>

		<?php } else {
			include('templates/pages/404.php');
		} ?>

			<p><?=$description?></p>
		</div>











