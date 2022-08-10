<h1>THIS IS THE STANDARD LANDING PAGE...PUT SOMETHING HERE</h1>

<p>This page presents a fork in the road.  THere has to be something on this page that will give a choice between loading a new page or loading just a template.</p>






<?php foreach($pageData['sections'] as $section) { ?>
<!--for each section in the JSON file (unique to each page)-->
	<section>
		<inner-column>

		<?php include("templates/modules/$section[module]/template.php"); ?>

		</inner-column>
	</section>



<!-- 
//Get the header.


//Get each of the modules for the page.



//Knowing the REAL filepath is important here.  This script is actually running in the index.php file, which means the filepath will be related to the index.php file, NOT this one! -->

<?php } ?>