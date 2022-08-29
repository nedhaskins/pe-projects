<section class='goals'>

	<h1 class='attention-voice'><?=$name?></h1>
	<h3 class='attention-voice'><?=$updated?></h3>

	<div class='line'></div>

	<ul class='goal-list'>

	<?php

	$sections = $subpage['sections'] ?? $module['sections'];

	foreach($sections as $subSection) { ?>

		<li class='goal-section'>
			<h3 class='attention-voice'><?=$subSection["heading"]?></h3>
				<ul>
					<?php foreach ($subSection["goals"] as $goal) { ?>
						<li class='goal-item'><?=$goal?></li>
					<?php } ?>
				</ul>
		</li>

	<?php } ?>

	</ul>

	<!-- 		//if main page type == style-guide {
	include dummy-data
	}
	-->

</section>
