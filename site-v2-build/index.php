
<!doctype html>

	<?php include('functions.php'); ?>

<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>

<!-- 	<link rel="stylesheet" href="styles/site.css"> -->
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family= -->
	<meta property="og:image" content="">
	<meta name="description" content="">
</head>
<body>

	<?php include('templates/partials/site-menu.php'); ?>

	<p>The landing page</p>

<p><?=queryString();?></p>



<p><?=currentPage();?></p>
<p style='color:green'>[X]currentPage() function works.</p>


<p><?php var_dump(pageData() );?></p>
<p style='color:green'>[X]pageData() function works.</p>


<main class='page-content'>
	<?php renderPageTemplate(); ?>
</main>






</body>
</html>
