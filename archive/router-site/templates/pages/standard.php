<?php include('page-header.php'); ?>






<?php foreach($pageData['sections'] as $section) { ?>

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