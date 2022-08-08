<?php include('functions.php'); ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href='styles/site.css'>
	<title>Ned Haskins - Web Designer - Richmond, VA</title>

</head>
<body>







<inner-column>

<gridbox class='navbar'>

<nav>
	<a class='link' href="index.php" alt="">home</a>
	<a class='link' href="?page=about" alt="">about me</a>
	<a class='link' href="?page=projects" alt="">projects</a>
	<a class='link' href="?page=the-lab" alt="">the lab</a>
	<a class='link' href="http://nedhaskins.substack.com/" alt="">substack</a>
	<a class='link' href="?page=style-guide" alt="">style guide</a>
	<a class='link' href="?page=contact" alt="">contact</a>
</nav>

</gridbox>


<gridbox class='logo'>

	<artifact>
		<?php include('full-logo.svg'); ?>
	</artifact>

</gridbox>


<gridbox class='page-content'>

<?php fetchPage(); ?>

</gridbox>


</inner-column>

</body>
</html>

