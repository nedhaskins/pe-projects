<!doctype html>

<?php include('functions.php'); ?>
<?php require('router.php'); ?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/site.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ceviche+One|Josefin+Sans">

<!--Metadata -->
	<meta property='og:image' content='https://peprojects.dev/alpha-4/ned/projects/php-crud/images/i-95.jpeg'> 
	<meta name='description' content='Resource for information on Virginia highways and byways.'>


	<?php if($page == 'home') { ?>
		<title>Highways of Virginia</title>
	<?php } else { ?>
		<title>Highways of Virginia - <?=$page?></title>		
	<?php } ?>

</head>

<body>
	<header>
		<inner-column>
			<?php include('modules/header.php'); ?>
		</inner-column>
	</header>

	<main class='page-content'>
		<inner-column>
			<?php getTemplate($page); ?> <!--Whenever there's a bunch of repeating code...think about how you can refactor it or turn it into a function. -->
		<inner-column>
	</main>
	<footer>
		<p>last edit July 3 @ 13:17</p>
	</footer>
</body>
</html>