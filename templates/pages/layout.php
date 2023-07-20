<?php
$json = file_get_contents('data/pages/layout.json');
$pageData = json_decode($json, true);
$sections = $pageData['layouts'];
?>

<inner-column>
	<a class='garden-link' href="?page=layout-garden">Back to Layout Garden</a>
	<?php returnLayoutPage($sections); ?>
</inner-column>