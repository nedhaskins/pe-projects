			<nav class='about-navbar'>
				<ul>
					<?php foreach($pageData as $subpage) { ?>
						<li class="attention-voice">
							<a href='?page=about&id=<?=$subpage['id']?>'>
							<?=$subpage['name']?>
							</a>
						</li>
					<?php } ?>
				</ul>	
			</nav>
