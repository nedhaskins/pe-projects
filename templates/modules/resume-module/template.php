
<section class='resume'>
<!-- <inner-column> -->
	<h1 class='title-voice'>work history</h1>
	<ul>


	<?php foreach ($jobs as $job) { ?>

		<li>
			<h2 class='bold-voice'><?=$job['jobTitle']?></h2>
			<h3 class='info'><em><?=$job['company']?></em>, <?=$job['city']?>, <em><?=$job['startDate']?>-<?=$job['endDate']?></em></h3>
			<p class='description'><?=$job['description']?></p>
		</li>

	<?php } ?>

	</ul>

	<h1 class='title-voice'>education</h1>
	<ul>


	<?php foreach ($education as $item) { ?>

		<li>
			<h2 class='bold-voice'><?=$item['name']?></h2>
			<h3 class='info'><?=$item['awarded']?></h3>
		
			<p class='description'><em><?=$item['startDate']?>-<?=$item['endDate']?></em></p>
		</li>
			
	<?php } ?>

	</ul>

	<h1 class='title-voice'>certifications</h1>
	<ul>

	<?php foreach ($certs as $cert) { ?>

		<li>
			<h2 class='bold-voice'><?=$cert['name']?></h2>
			<h3 class='description'><em><?=$cert['awarded']?></em></h3>
		</li>
			
	<?php } ?>				
	
	</ul>

<!-- </inner-column> -->
</section>