

<section class='header-and-text'>


<?php foreach($sections as $section) { ?>
  <h2 class='attention-voice'><?=$section['header']?></h2>
    <?php foreach($section['copy'] as $copy) { ?>
      <p class='body-copy'><?=$copy?></p>
    <?php }
} ?>


</section>