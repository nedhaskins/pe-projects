
<?php 

$json = file_get_contents('data/pages/about.json');
$pageData = json_decode($json, true);

$sections = $pageData[0]['sections'];

?>

<section class='bio'>

	<picture>
		<img src='images/site-photo.jpeg' alt="Photo of Ned Haskins">
	</picture>

	<?php foreach($sections as $section) {
		include('templates/modules/header-and-text/template.php');
	} ?>
</section>