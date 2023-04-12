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
				<li class='active'>
					<div class='link-logo'>
						<?php include('images/windmill.svg'); ?>
					</div>
					<a class='active' href="?page=<?=$link['slug']?>" alt=""><?=$link['name']?></a>
				</li>


		<?php } elseif($link['slug'] == 'about') { ?>

				<li class='inactive'>
					<div class='link-logo'>
						<?php include('images/windmill.svg'); ?>
					</div>
					<a class='link' href="?page=<?=$link['slug']?>&id=1" alt=""><?=$link['name']?></a>
				</li>


		<?php } elseif($link['slug'] == 'substack') { ?>

				<li class='inactive'>
					<div class='link-logo'>
						<?php include('images/windmill.svg'); ?>
					</div>
					<a id="substack" class='link' href="http://nedhaskins.substack.com" alt=""><?=$link['name']?></a>
				</li>


		<?php } else { ?>


				<li class='inactive'>
					<div class='link-logo'>
						<?php include('images/windmill.svg'); ?>
					</div>
					<a class='link' href="?page=<?=$link['slug']?>" alt=""><?=$link['name']?></a>
				</li>
	
	
		<?php }

	} ?>

</ul>

<script>
	
	const substackLink = document.querySelector('#substack');

	substackLink.addEventListener('click', function(event) {

		event.preventDefault();
		let userConfirmation = confirm('You\'re about to navigate away from nedhaskins.io. Keep going?');
		if(userConfirmation) {
			window.location.href = substackLink.href;
		} else {
			window.close();
		}
	});

</script>