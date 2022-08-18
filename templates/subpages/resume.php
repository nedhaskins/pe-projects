<?php 

$json = file_get_contents('data/pages/about.json');

$pageData = json_decode($json, true);

$jobs = $pageData[2]['sections'][0]['jobs'];
$education = $pageData[2]['sections'][1]['education'];
$certs = $pageData[2]['sections'][2]['certs'];




include('templates/modules/resume-module/template.php');


?>


