<nav class='about-navbar'>
	<ul>
		<?php foreach($pageData as $subpage) { ?>
			
			<li>
			
			<?php if($subpage['id'] == $_GET['id']) { ?>
				<a class='active' href='?page=about&id=<?=$subpage['id']?>'>
				*<?=$subpage['name']?>
				</a>

			<?php } else { ?>
				<a class='link' href='?page=about&id=<?=$subpage['id']?>'>
				<?=$subpage['name']?>
				</a>
			</li>
		<?php }
		} ?>
	</ul>	
</nav>