<?php include('functions.php'); ?>

<link rel='stylesheet' href='styles/site.css'>

<inner-column>

<gridbox class='navbar'>

<nav>
	<a class='link' href="index.php" alt="">home</a>
	<a class='link' href="?page=about" alt="">about me</a>
	<a class='link' href="?page=projects" alt="">projects</a>
	<a class='link' href="?page=the-lab" alt="">the lab</a>
	<a class='link' href="http://nedhaskins.substack.com/" alt="">substack</a>
	<a class='link' href="?page=style-guide" alt="">style guide</a>
	<a class='link' href="?page=contact" alt="">contact</a>
</nav>

</gridbox>


<gridbox class='logo'>

	<artifact>
		<?php include('full-logo.svg'); ?>
	</artifact>

</gridbox>


<gridbox class='page-content'>

<?php fetchPage(); ?>

</gridbox>


</inner-column>

