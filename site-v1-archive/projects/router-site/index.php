<?php include('utilities.php'); ?>

<header>
	<p><?=queryString();?></p>
	<h1>PAGE TITLE</h1>

	<p>page intro <code>$_GET[]</code></p>
<?php include('partials/site-menu.php');
	?>
	
</header>




<?php getPageTemplate( currentPage() ); ?>

<section>
	<h2>SECTION ONE</h2>
</section>

<footer>
	<h2>SECTION ONE</h2>
</footer>
