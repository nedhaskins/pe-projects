<!-- <link rel="stylesheet" href='../../../styles/site.css'> -->


<section class='projects'>

<h2 class='attention-voice'>projects</h2>
<p class='body-copy'>Push your limits.  All the time.  My current areas of focus include digging deeper into the capabilities of CSS, the history and future of layouts on the Web, dynamic programming, and modular systems.  These projects showcase some of the end results of my explorations.</p>


<?php foreach($pageData as $project) { ?>
	<div class='project' style=
	'background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?=$project['image']?>");
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;'>

		<a class='attention-voice' href="projects/<?=$project['slug']?>/index.php"><?=$project['name']?></a>
		<p><?=$project['copy']?></p>
	</div>

<?php } ?>

</section>

<?php




//function to get project file
