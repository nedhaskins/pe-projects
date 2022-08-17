<section class="button-list">	
	<ul class='link-container'>
		<?php foreach($section['buttons'] as $button) { ?>
			<li><a href="?page=<?=$section['name']?>&slug=<?=strtolower($button)?>"><?=$button?></a></li>
		<?php } ?>
	</ul>
</section>
