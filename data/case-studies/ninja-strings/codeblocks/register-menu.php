<!doctype html>
<html>
<head>

	<link href="styles/prism.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<pre><code class='lang-php'>function register_my_menu() {
    register_nav_menu('site-menu', __('Site menu'));
}
add_action('init', 'register_my_menu');
</code></pre>


<script type='text/plain' class=''></script>

<script src='scripts/prism.js'></script>

</body>
</html>