
<!-- <link rel="stylesheet" href='../../../styles/site.css'> -->

<?php 


$json = file_get_contents('data/pages/about.json');
$pageData = json_decode($json, true);


$sections = $pageData[0]['sections'];

?>

<section class='bio'>

<?php include('templates/modules/header-and-text/template.php'); ?>

</section>