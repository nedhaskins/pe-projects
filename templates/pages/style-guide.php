<section class='<?=$pageData['slug']?>'>

<section class='header-and-text'>
  <h2 class='attention-voice'>style guide</h2>
  <p class='body-copy'>This page is a guide to all of the elements and modules used on this site.</p>
</section>



	<!-- So what will this page do?

	This page will pull in the individual styles for each module, and the JSON file will hold data for each module the same way it does for the actual page content.
	 -->

	<div class='line'></div>


	<!--FONT OVERVIEW-->

	<?php include('templates/modules/font-overview/template.php'); ?>

	<div class='line'></div>



<section class='home'>
	<h1 class='title-voice'>Landing-page text</h1>
</section>


<div class='line'></div>

<!--HEADER + TEXT-->

<section class='header-and-text'>
  <h2 class='attention-voice'>Header - step two</h2>
  <p class='body-copy'>Here's some sample text. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
</section>

<div class='line'></div>

<!--SUBHEADER + TEXT-->

<section class='subheader-and-text'>
  <h3 class='attention-voice'>Header - step one</h3>
  <p class='body-copy'>Here's some sample text. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
</section>

<div class='line'></div>

<!--SUBHEADER + FIG + CAPTION -->

<section class='subheader-figure-caption'>

  <h3 class='attention-voice'>A picture's worth a thousand words.</h3>

    <picture>
      <img src="images/collage.jpg" alt="Some text for screen readers.">
      <figcaption class='body-copy'>The above photo has some embedded text for screen readers!</figcaption>
    </picture>

</section>

<div class='line'></div>

<!--GOALS-->

<section class='goals'>

	<h1 class='attention-voice'>goals module</h1>
	<h3 class='attention-voice'>Date of last revision</h3>

	<div class='line'></div>

	<ul class='goal-list'>

		<?php foreach ($goalSections as $section) {
			
			include("templates/modules/goals-module/template.php");

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