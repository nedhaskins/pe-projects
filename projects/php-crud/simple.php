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
		<h1>Highways of Virginia</h1>
		<h2>Explore the roads of the Old Dominion.</h2>
<nav class="site-menu">

<a href='?page=home'>Home</a>
<a href='?page=routeList'>Route List</a>

</nav>
	</header>

	<main class='page-content'>
		<?php
			if($page == "home") { ?>
			<p>Welcome to the site!</p>
			<p>This site offers historical information, statistics, and photogaphs of the road network of the state of Virginia.</p>
			<p>Click on the Region List to choose a specific part of the state to explore -- and to see a list of cities and counties in that region.</p>
			<p>If you already know what city or county you're interested in exploring, click on the City/County list.</p>
			<p>For each city or county detail page, a list of routes will be available to click on and get information about!</p>
			<p>You can also go directly to a route's information page if you know which route you're looking for!</p>
			<p>I hope you find your visit to be informative and fun!</p>					
		<?php } ?>

		<?php	if($page == "routeList") { ?>

			<?php

			$json = file_get_contents("data.json");

			$highwayData = json_decode($json, true);

			$routeData = $highwayData['highways'];

			?>

			<ul>
				<?php foreach ($routeData as $route) { ?>
					<li class='route-card'>
						<picture>
							<img src='images/<?=$route['thumbnail']?>'>
						</picture>
						<h2 class='route-name'><?=$route['name']?></h2>
						<h3 class='length-in-miles'>Length in miles: <?=$route['lengthInMiles']?></h3>
						<h3 class='start-point'>Start location: <?=$route['startPoint']?></h3>
						<h3 class='end-point'>End location: <?=$route['endPoint']?></h3>
						<a class='button' href='?page=detail&route=<?=$route['id']?>'>More info</a>
					</li>
				<?php } ?>
			</ul>

		<?php } ?>
	
		<?php	if($page == "detail") { ?>

			<?php
				if ( isset($_GET['route']) ) {
					$this_route_id = $_GET['route'];
				}
				foreach($routeData as $route) {

					if($this_route_id == $route['id']) {
						$detail = $route;
					}
				}
			?>

			<?php if (isset($detail) ) { ?>
			<h1><?=$detail['name']?></h1>
			<picture>
				<img src="images/<?=$detail['thumbnail']?>" alt="">
			</picture>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<?php } ?>
		<?php } ?>

		<?php if($page == 'create') { ?>

			<?php if ( isset($_POST['add']) ) {
				echo "added";
				}	
			?>

			<h1>Enter the route's info here!</h1>

			<form method='POST'>

				<select name="routes" id="route-select">
					<option value="">What type of route is this?</option>
					<option value="">Interstate</option>
					<option value="">State Route</option>
				</select>

				<field>
					<label>Route Name</label>
					<input>
				</field>

				<field>
					<label>Length in Miles</label>
					<input type='number'>
				</field>

				<field>
					<label>Starting Location</label>
					<input>
				</field>

				<field>
					<label>End Location</label>
					<input>
				</field>

				<button type="submit" name='add'>Add route</button>

			</form>

		<?php } ?>
	</main>
</body>
</html>