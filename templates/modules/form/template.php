 <section class='exercise'>

   <?php 

      $filepath = $section['filepath'] ?? $module['filepath'];

      include("$filepath.php");

   ?>

</section>