<?php
	$goalSections = [
		"one" => [
			"heading" => "1-Month Plan",
			"goals" => [
				"Obtain a high level of comfort with PHP",
				"Continue to write blogposts regularly",
				"Increase my HTML and CSS toolkits to handle more complex layouts and come up with more informed ideas",
				"Work more with Affinity Designer's tools and try more complex uses of the Pen Tool",	
			],	
		],
	

		"two" => [
			"heading" => "3-Month Plan",
			"goals" => [
				"Be ready for the job market with a comprehensive personal site and a portfolio of class projects, client projects and case studies",
				"Have practice with mock interviews, code pairing and speedruns to prepare for in-person job interviews",
				"Have a solid record of communication and collaboration on GitHub (commits of projects regularly), Discord, Reddit, et al.",
			],	
		],

		"three" => [
			"heading" => "6-Month Plan",
			"goals" => [
				"Be on the job with entry-level contract work and/or an apprenticeship or internship with minimum compensation of $60k or equivalent",
			],	
		],

		"four" => [
			"heading" => "1-Year Plan",
			"goals" => [
				"Be working on more advanced projects requiring specialized knowledge with minimum compensation of $80k or equivalent",
			],	
		],











	];











foreach ($goalSections as $section) { ?>

<section>
	<h2><?=$section["heading"]?></h2>
	<ul class='goal-list'>
		<?php foreach ($section["goals"] as $goal) { ?>
			<li><?=$goal?></li>
		<?php } ?>

</section>

<?php } ?>