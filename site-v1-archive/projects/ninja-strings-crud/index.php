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

	<?php if($page == 'home') { ?>
		<title>Ninja Strings - String Quartet in Richmond, VA</title>

	<? } else { ?>
		<title>Ninja Strings - <?=$page?></title>
		
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

			if($page == "liveEvents") {
				include('liveevents.php');
			}

			if($page == "video") {
				include('video.php');
		 	} 	

		 	if($page == "audio") {
				include('audio.php');
		 	} 	

		 	if($page == "repertoire") {
				include('repertoire.php');
		 	} 	

		 	if($page == "teaching") {
				include('teaching.php');
			} 	

		 	if($page == "testimonials") {
				include('testimonials.php');
		 	} 	

		 	if($page == "contact") {
				include('contact.php');
			}
		?>
	</main>
</body>
</html>