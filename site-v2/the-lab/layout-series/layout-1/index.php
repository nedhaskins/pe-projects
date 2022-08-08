<!doctype html>

<?php

$json = file_get_contents("data.json");

$data = json_decode($json, true);

$articles = $data['articles'];

$images = $data['images'];

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title></title>
</head>
<body>

	<inner-column>

		<article-section>
			<div class='article-heading'>
				<h2 class='heading-voice'>Heading level 2</h2>
				<p class='copy-voice'>This is some body text. This is some body text. This is some body text. This is some body text.</p>
			</div>
			<div class='articles'>
				<?php foreach ($articles as $article) { ?>
					<div class='article'>
						<div class=line></div>
						<h3 class='heading-voice'><?=$article['title']?></h3>
						<p class='copy-voice'><?=$article['content']?></p>
					</div><!--article-->
				<?php } ?>
			</div>
		</article-section>

		<picture-section>
			<?php foreach ($images as $image) { ?>
				<picture>
						<img src='<?=$image['image']?>' alt="">
				</picture>
			<?php } ?>
		</picture-section>

	</inner-column>

</body>
</html>