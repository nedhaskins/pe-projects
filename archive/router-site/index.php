<style>
	section {
		border: 2px solid red;
	}
	img {
		display: block;
		width: 100%;
		height: auto;
	}
</style>



<?php include('functions.php');?>

<header class='site-header'>
	<p><?=queryString();?></p>
	<?php include('templates/partials/site-menu.php');?>
</header>




<main class='page-content'>
	<?php renderPageTemplate(); ?>
</main>



