<?php 

$json = file_get_contents('data/pages/about.json');

$pageData = json_decode($json, true);

$jobs = $pageData[2]['sections'][0]['jobs'];
$education = $pageData[2]['sections'][1]['education'];
$certs = $pageData[2]['sections'][2]['certs'];

?>


<section class='resume'>
<!-- <inner-column> -->

	<ul>
		<h2 class='attention-voice'>work history</h2>

	<?php foreach ($jobs as $job) { ?>

		<li>
			<h3 class='bold-voice'><?=$job['jobTitle']?></h3>
			<p class='info'><em><?=$job['company']?></em>, <?=$job['city']?>, <em><?=$job['startDate']?>-<?=$job['endDate']?></em></p>
			<p class='description'><?=$job['description']?></p>
		</li>

	<?php } ?>

	</ul>

	<ul>
		<h2 class='attention-voice'>education</h2>

	<?php foreach ($education as $item) { ?>

		<li>
			<h3 class='bold-voice'><?=$item['name']?></h3>
			<p class='info'><?=$item['awarded']?></p>
		
			<p class='description'><em><?=$item['startDate']?>-<?=$item['endDate']?></em></p>
		</li>
			
	<?php } ?>

	</ul>

	<ul>
		<h2 class='attention-voice'>certifications</h2>

	<?php foreach ($certs as $cert) { ?>

		<li>
			<h3 class='bold-voice'><?=$cert['name']?></h3>
			<p class='description'><em><?=$cert['awarded']?></em></p>
		</li>
			
	<?php } ?>				
	
	</ul>

<!-- </inner-column> -->
</section>