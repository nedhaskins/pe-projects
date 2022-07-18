<!doctype html>

<?php

$json = file_get_contents("data.json");

$resume = json_decode($json, true);

$jobs = $resume['resume']['jobs'];
$education = $resume['resume']['education'];
$certs = $resume['resume']['certs'];

?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="resume.css">
		<meta property="og:image" content="https://peprojects.dev/alpha-4/ned/images/personal-meta-image.jpg">
		<meta name="description" content="">
		<title>Ned Haskins - Web Designer - Resume</title>
	</head>
	<body>

		<inner-column>
	
		<h1 class='name-voice'>ned haskins</h1>

			<ul><p class='list-title'>Work History</p>

			<?php foreach ($jobs as $job) { ?>

				<li>
					<h2 class='job-voice'><?=$job['jobTitle']?></h2>
					<p class='info'><em><?=$job['company']?></em>, <?=$job['city']?>, <em><?=$job['startDate']?>-<?=$job['endDate']?></em></p>
					<p class='description'><?=$job['description']?></p>
				</li>

			<?php } ?>

			</ul>

			<ul><p class='list-title'>Education</p>

			<?php foreach ($education as $item) { ?>

				<li>
					<h2 class='job-voice'><?=$item['name']?></h2>
					<p class='info'><?=$item['awarded']?></p>
				
					<p class='description'><em><?=$item['startDate']?>-<?=$item['endDate']?></em></p>
				</li>
					
			<?php } ?>

			</ul>

			<ul><p class='list-title'>Certifications</p>

			<?php foreach ($certs as $cert) { ?>

				<li>
					<h2 class='job-voice'><?=$cert['name']?></h2>
					<p class='description'><em><?=$cert['awarded']?></em></p>
				</li>
					
			<?php } ?>				
			
			</ul>

		</inner-column>
	</body>
</html>