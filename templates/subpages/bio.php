
<?php 

$json = file_get_contents('data/pages/about.json');
$pageData = json_decode($json, true);

$sections = $pageData[0]['sections'];

?>

<section class='bio'>
	<picture-wrapper>
		<picture>
			<img src='images/new-portrait.png' alt="Photo of Ned Haskins">
		</picture>
	</picture-wrapper>

	<?php foreach($sections as $section) {

		$header = $section['header'];
		$copy = $section['copy'];

		include('templates/modules/header-and-text/template.php');
	} ?>
</section>