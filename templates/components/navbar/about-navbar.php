<nav class='navbar'>
	<ul>
		<?php foreach($pageData as $subpage) { ?>
			
			<?php if($subpage['id'] == $_GET['id']) { ?>

			<li class='active'>
				<div class='link-logo'>
					<?php include('images/windmill.svg'); ?>
				</div>
				<a class='active' href='?page=about&id=<?=$subpage['id']?>'>
				<?=$subpage['name']?>
				</a>
			</li>

			<?php } else { ?>

			<li class='inactive'>
				<div class='link-logo'>
					<?php include('images/windmill.svg'); ?>
				</div>
				<a class='link' href='?page=about&id=<?=$subpage['id']?>'>
				<?=$subpage['name']?>
				</a>
			</li>
		<?php }
		} ?>
	</ul>	
</nav>