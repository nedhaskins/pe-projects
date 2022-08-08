
<link rel="stylesheet" href='../../../styles/site.css'>

<?php 


$json = file_get_contents('data/pages/about.json');
$pageData = json_decode($json, true);


$bioSections = $pageData[0]['sections'];

?>

<section class='bio'>

<?php foreach($bioSections as $section) { ?>
  <h2 class='attention-voice'><?=$section['header']?></h2>
    <?php foreach($section['copy'] as $copy) { ?>
      <p class='body-copy'><?=$copy?></p>
    <?php }
} ?>

</section>