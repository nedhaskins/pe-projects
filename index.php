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
		<?php include('navbar.php'); ?>
	</gridbox>

	<gridbox class='logo'>
		<artifact>
			<?php include('images/full-logo.svg'); ?>
		</artifact>
	</gridbox>


	<gridbox class='page-content'>
		<?php fetchPage(); ?>
	</gridbox>

</inner-column>

</body>
</html>

