<?php include('functions.php');

if( isset($_GET['page']) ) {
	$page = $_GET['page']; 
} else {
	$page = 'home';
}

if( isset($_GET['slug']) ) {
	$slug = $_GET['slug'];
}

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php if($page == 'layout') { ?>

		<link rel='stylesheet' href='styles/layout-garden.css'>

	<?php } else { ?>

		<link rel='stylesheet' href='styles/style.css'>

	<?php } ?>

	<title>Ned Haskins - Web Designer - Richmond, VA</title>

</head>

<?php if($page == 'home' || $page == '404') { ?>

	<body class='landing-404'>
		<header>
			<div class='site-menu'>
				<nav id='navbar' class='navbar'>
					<?php include('templates/components/navbar/main-navbar.php'); ?>
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

<?php } elseif($page == 'layout' && isset($_GET['slug'] ) ) { ?>

	<body class='layout'>
		<main class='page-content'>
			<?php fetchPage(); ?>
		</main>
	</body>

<?php } elseif($page == 'exercise' && isset($GET['slug'] ) ) { ?>

	<body class='e4p-detail'>
		<main class='page-content'>
			<?php fetchPage(); ?>
		</main>
	</body>

<!--come back to this and finish it -- add vanilla JS and Vue options-->

<?php } else { ?>            

	<body class='index'>
		<header>
			<div class='site-menu'>
				<nav class='navbar'>
					<?php include('templates/components/navbar/main-navbar.php'); ?>
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