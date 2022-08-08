<!doctype html>

<?php

$json = file_get_contents("data/layout-2.json");

$data = json_decode($json, true);

$articles = $data['articles'];

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<title></title>
</head>
<body>

	<inner-column>

		<article-section>
			<div class='article-heading'>
				<h4 class='teaser-voice'>Little teaser</h4>
				<h2 class='heading-voice'>Heading level 2</h2>
				<p class='copy-voice'>This is some body text. This is some body text. This is some body text. This is some body text.</p>
			</div>
			<div class='articles'>
				<?php foreach ($articles as $article) { ?>
					<div class='article'>
						<logo>
							<?php include('logo.svg'); ?>
						</logo>
						<h3 class='heading-voice'><?=$article['title']?></h3>
						<p class='copy-voice'><?=$article['content']?></p>
					</div><!--article-->
				<?php } ?>
			</div>
		</article-section>

		<footer>
			<div class='line'></div>
			<div class='text-wrapper'>
				<p>This is some body text. This is some body text. This is some body text. This is some body text.</p>
			</div>
		</footer>


	</inner-column>

</body>
</html>