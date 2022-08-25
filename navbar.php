<?php

$json = file_get_contents('navbar.json');
$pageData = json_decode($json, true);

$links = $pageData['links'];


if( isset($_GET['page']) ) {
	$currentPage = $_GET['page'];
	} else {
	$currentPage = 'home';
}

?>

<ul>

<?php

foreach($links as $link) {

	if($link['slug'] == $currentPage) { ?>

		<li><a class='active' href="?page=<?=$link['slug']?>" alt=""><?=$link['name']?></a></li>

	<?php } else { ?>

		<li><a class='link' href="?page=<?=$link['slug']?>" alt=""><?=$link['name']?></a></li>

	<?php }

	} ?>

</ul>
