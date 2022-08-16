<?php
$title = $section['items']['title'];
$links = $section['items']['links'];
$boxItems = $section['items']['boxItems'];
$buttonText = $section['items']['buttonText'];
?>




<header class='site-header'>

	<h1 class='heading-voice'><?=$title?></h1>


	<nav class='navbar'>
		<ol>
			<?php foreach($links as $link) { ?>
				<li><a href='#'><?=$link?></a></li>
			<?php } ?>
		</ol>
	</nav>

</header>


<photo-module>
	

</photo-module>


<footer>
	<footer-top>
		<h2 class='heading-voice'><?$boxItems['heading']?></h2>
		<p class='copy-voice'><?=$boxItems['copy']?></p>
		<call-to-action>
			<box></box>
			<h4 class='copy-voice'><?=$boxItems['callToAction']?></h4>
		</call-to-action>
	</footer-top>
		
	<button type='submit' name='submitted'><?=$buttonText?></button>

</footer>