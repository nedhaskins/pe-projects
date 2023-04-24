<?php include('functions.php'); ?>
<?php require('router.php'); ?>

<!doctype html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/style.css">

	<meta property='og:image' content='https://peprojects.dev/alpha-4/ned/projects/php-crud/images/i-95.jpeg'> 
	<meta name='description' content='Resource for information on Virginia highways and byways.'>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

	<title>Highways of Virginia</title>

</head>
<body>
	<?php include ('./templates/components/site-header/template.php'); ?>
	<main>
		<inner-column>
			<?php pageTemplate($page); ?>
		</inner-column>
	</main>
</body>
</html>