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

		if($link['slug'] == $currentPage && $link['slug'] != 'substack') { ?>

			<link-wrapper>
				<li class='active'>
					<div class='link-logo'>
						<?php include('images/windmill.svg'); ?>
					</div>
					<a class='active' href="?page=<?=$link['slug']?>" alt=""><?=$link['name']?></a>
				</li>
			</link-wrapper>

		<?php } elseif($link['slug'] == 'about') { ?>

			<link-wrapper>
				<li class='inactive'>
					<div class='link-logo'>
						<?php include('images/windmill.svg'); ?>
					</div>
					<a class='link' href="?page=<?=$link['slug']?>&id=1" alt=""><?=$link['name']?></a>
				</li>
			</link-wrapper>

		<?php } elseif($link['slug'] == 'substack') { ?>

			<link-wrapper>
				<li class='inactive'>
					<div class='link-logo'>
						<?php include('images/windmill.svg'); ?>
					</div>
					<a class='link' href="http://nedhaskins.substack.com" alt=""><?=$link['name']?></a>
				</li>
			</link-wrapper>

		<?php } else { ?>

			<link-wrapper>
				<li class='inactive'>
					<div class='link-logo'>
						<?php include('images/windmill.svg'); ?>
					</div>
					<a class='link' href="?page=<?=$link['slug']?>" alt=""><?=$link['name']?></a>
				</li>
			</link-wrapper>
	
		<?php }

	} ?>

</ul>
