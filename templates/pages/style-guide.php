
<section class="<?=$pageData['slug']?>">

	<section class='header-and-text'>
	  <h2 class='attention-voice'><?=$pageData['header']?></h2>
	  <p class='body-copy'><?=$pageData['copy']?></p>
	</section>

	<div class='line'></div>

	<?php foreach ($pageData['sections'] as $section) {

		echo "<div class='line'></div>";
			
			include('templates/modules/' . $section['type'] . '/template.php');

		} ?>

	</ul>

</section>







<div class='line'></div>

<!--RESUME-->

<section class='resume'>

		<h3 class='attention-voice'>résumé module</h3>

		<div>
			<h3 class='bold-voice'>Job title</h3>
			<p class='info'><em>Company</em>, Location, <em>Start date - end date</em></p>
			<p class='description'>The job description goes here. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
		</div>

</section>

<div class='line'></div>

<!--LINK-CARD-->



	<section class='link-card' style=
			'background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/collage.jpg");
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			margin: 40px 0px 40px 0px;'>
				<a class='attention-voice' href="<?=$pageData['slug']?>/<?=$item['slug']?>/index.php">
					Link-card
				</a>

				<p>This is used to link to projects, lab items and outside links. Some projects will have case studies attached.</p>
	</section>


</section> <!--style-guide-->