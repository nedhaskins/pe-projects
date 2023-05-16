<!doctype html>
<html>
<head>

	<link href="styles/prism.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<pre><code class="language-php">function isSelected($value) {
	if ($_POST['route-filter'] === $value) {
		return 'selected';
	} else {
		return '';
	}
}</code></pre>

	<script src='scripts/prism.js'></script>

</body>
</html>