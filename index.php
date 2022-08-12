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

<!-- <inner-column> -->

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

<!-- </inner-column> -->

</body>
</html>

