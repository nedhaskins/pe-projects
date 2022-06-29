<?php
	$page = null;

	if( isset($_GET['page']) ) {
		$page = $_GET['page']; // url?page=string
	} else {
		$page = 'home'; //default
	}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/site.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ceviche+One|Josefin+Sans">

	<!--Metadata
		<meta name='description' content='PSSST (CSS)'>
	<meta property='og:image' content=''> -->

	<?php if($page == 'home') { ?>
		<title>Highways of Virginia</title>
	<?php } else { ?>
		<title>Highways of Virginia - <?=$page?></title>		
	<?php } ?>

</head>

<body>
	<header>
		<?php include('site-menu.php'); ?>
	</header>

	<main class='page-content'>
		<?php
			if($page == "home") {
				include('home.php');
			}

			if($page == "routeList") {
				include('routeList.php');
			}

			if($page == "detail") {
				include('detail.php');
			}
		?>
	</main>
</body>
</html>