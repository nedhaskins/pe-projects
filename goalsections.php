<?php

	$goalSections = [

		"one" => [
			"heading" => "Daily action items",
			"goals" => [
				"Start daily work early in the day (before 9 a.m.)",
				"Have specific tasks for each day of the week (i.e. write a blogpost, add a module to the CSS garden)",
				"Make time for daily layout practice",
			],
		],

		"two" => [
			"heading" => "1-Month Plan",
			"goals" => [
				"Obtain a high level of comfort with PHP",
				"Demonstrated improvement in CSS skills and layout implementation",
				"Work more with Affinity Designer's tools and try more complex uses of the Pen Tool",	
			],	
		],
	

		"three" => [
			"heading" => "3-Month Plan",
			"goals" => [
				"Be ready for the job market with a comprehensive personal site and a portfolio of class projects, client projects and case studies",
				"Have practice with mock interviews, code pairing and speedruns to prepare for in-person job interviews",
				"Have a solid record of communication and collaboration on GitHub (regular commits of or contributions to projects), Discord, Reddit, et al.",
			],	
		],

		"four" => [
			"heading" => "6-Month Plan",
			"goals" => [
				"Be on the job with entry-level contract work and/or an apprenticeship or internship that has a minimum compensation of $60k or equivalent and allows for continued in-depth practice of HTML, CSS, PHP and Javascript via web design / implementation projects"
			],	
		],

		"five" => [
			"heading" => "1-Year Plan",
			"goals" => [
				"Be working on more advanced projects requiring specialized knowledge with minimum compensation of $80k or equivalent",
				"Have a solid pool of resources - colleagues, discussion groups, Discord channels - to consult for any technical issues encountered in my work environment",
			],	
		],

		"six" => [
			"heading" => "5-Year Plan",
			"goals" => [
				"Have a strong client and networking base and either contract or consulting work with $150k+ compensation",
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