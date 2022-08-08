
<section class='the-lab'>

<h2 class='attention-voice'>the lab</h2>
<p class='body-copy'>I'm always experimenting. Here are some things I've got in the works.</p>


<?php foreach($pageData['unordered-list'] as $item) { ?>
	<div class='lab-item'
	style=
	'background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?=$item['image']?>");
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;'>

		<h3 class='attention-voice'><?=$item['name']?></h3>
		<p><?=$item['description']?></p>
	</div>

<?php } ?>

</section>