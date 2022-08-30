




<section class="button-list">	
	<ul class='link-container'>
		<?php foreach($buttons as $button) { ?>
			<li><a href="?page=<?=$name?>&slug=<?=strtolower($button)?>"><?=$button?></a></li>
		<?php } ?>
	</ul>
</section>
