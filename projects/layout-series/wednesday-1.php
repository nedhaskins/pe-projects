<?php

$json = file_get_contents("data/wednesday-1.json");

$data = json_decode($json, true);

$articles = $data['articles'];
$heading = $data['heading'];
$opening = $data['opening'];

?>
 
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<title></title>
</head>
<body>

	<section class='breaking-news'>
		<inner-column>

			<?php include('article-section.php');?>

		</inner-column>
	</section>
</body>



</body>
</html>