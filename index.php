<?php include('functions.php'); ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href='styles/site.css'>
	<title>Ned Haskins - Web Designer - Richmond, VA</title>

</head>


<?php

if( isset($_GET['page']) ) {
$page = $_GET['page']; 
} else {
	$page = 'home';
}

if( isset($_GET['slug']) ) {
$slug = $_GET['slug'];
}

if($page == 'layout' && isset($_GET['slug'] ) ) { ?>

	<body class='layout'>
		<main class='page-content'>
			<p>This will have a different body class.</p>
			<?php fetchPage(); ?>
		</main>

	</body>

<?php } else { ?>            

	<body class='index'>
		<header>
			<div class='site-menu'>
				<nav class='navbar'>
					<?php include('navbar.php'); ?>
				</nav>
				<div class='logo'>
					<?php include('images/full-logo.svg'); ?>
				</div>
			</div>
		</header>

		<main class='page-content'>
			<?php fetchPage(); ?>
		</main>
	</body>

<?php } ?>

</html>