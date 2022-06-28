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
	<title>Ninja Strings - String Quartet in Richmond, VA</title>
</head>

<h1>ninja strings</h1>
<h2>richmond, VA | washington, DC | eastern seaboard, united states</h2>

<nav class="site-menu">
	
<a href='?page=home'>Home</a>
<a href='?page=liveEvents'>Live Events</a>
<a href='?page=video'>Video</a>
<a href='?page=audio'>Audio</a>
<a href='?page=repertoire'>Repertoire</a>
<a href='?page=teaching'>Teaching</a>
<a href='?page=testimonials'>Testimonials</a>
<a href='?page=contact'>Contact</a>

</nav>


<body>

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


</body>
</html>