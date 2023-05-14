<!doctype html>
<html>
<head>

	<link href="styles/prism.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<pre><code class='language-js'>const cartGrouping = computed(function () {
	return list.value?.reduce(function (group, item) {
		group[item.name] = group[item.name] ?? [];
		group[item.name].push(item);
		return group;
	}, {}); //the accumulator
});
</code></pre>

	<script src='scripts/prism.js'></script>

</body>
</html>