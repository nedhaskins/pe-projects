<!-- Need $header and $copy variables here.  Each page that uses this template will need to have those variables defined to use this template. -->





<section class='header-and-text'>


<?php foreach($sections as $section) {

$header = $section['header'];
$copy = $section['copy'];


 ?>


  <h2 class='attention-voice'><?=$header?></h2>
    <?php foreach($copy as $copy) { ?>
      <p class='body-copy'><?=$copy?></p>
    <?php }
} ?>


</section>