<?php

$list = $pageData['unordered-list'];

?>


<section class='the-lab'>

<h2 class='attention-voice'>the lab</h2>
<p class='body-copy'>I'm always experimenting. Here are some things I've got in the works.</p>


<?php foreach($list as $item) { ?>
	<div class='lab-item'>
		<a class='attention-voice' href="?page=the-lab&slug=<?=$item['slug']?>"><?=$item['name']?></a>
		<p><?=$item['description']?></p>
	</div>

<?php } ?>

</section>

<?php

if( isset($_GET['slug']) ) {	

	foreach ($list as $item) {
		$itemSlug = $item['slug'];
		$itemURL = $item['url'];

		//These both have to be defined in the loop,
		//as they're unique to each object.
		// echo $itemSlug;
		// echo $itemURL;

		if($itemSlug == $_GET['slug']) {

			if($itemURL == "") {
				include("the-lab/" . $itemSlug . "/index.php");
			} else {
				header("Location: " . $itemURL);
				exit;
			}
		}
	}
}