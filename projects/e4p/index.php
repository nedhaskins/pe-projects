<?php

function showErrors() {
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
}
showErrors();

$json = file_get_contents('data/e4p-data.json');

$data = json_decode($json, true);

$items = $data['items'];

?> 

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href='css/site.css'>
	<title></title>
</head>
<body>

	<inner-column class='e4p'>
		<h1 class='attention-voice'>exercises for programmers</h1>

		<p class='copy-voice'>These exercises are taken from author's Exercises for Programmers book.  These 57 exercises explore the main concepts in programming and demonstrate how to use conditonal statements, functions, etc. to work out practical problems.  The exercises are written in PHP. (might include a JavaScript category later)</p>

		<code-choice>	
			<ul class='link-container'>
				<li><a href="" >PHP</a></li>
				<li><a href="" >JavaScript</a></li>
			</ul>
		</code-choice>

		<list-module>
			<ul>
				<?php foreach ($items as $item) { ?>
					<li class='e4p-list-item'>
						<picture class='e4p-image'><?php include($item['image']); ?></picture>
						<a href="<?=$item['file']?>"><?=$item['name']?></a>
					</li>
				<?php } ?>
			</ul>
		</list-module>
	</inner-column>

</body>
</html>