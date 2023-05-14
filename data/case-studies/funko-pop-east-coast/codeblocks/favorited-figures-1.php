<!doctype html>
<html>
<head>

	<link href="styles/prism.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<pre><code class='language-js'>//For each item in the favorites list,
//return the figure from the figures collection that matches the name of that favorites item.
const favoritedFigures = computed(function () {
	let array = [];
	for (let i = 0; i < favorites.list.length; i++) {
		const found = figures.value.find((item) => item.slug === favorites.list[i].name);
		array.push(found);
	}
	return array; //Return stops the function!
});
</code></pre>

	<script src='scripts/prism.js'></script>

</body>
</html>