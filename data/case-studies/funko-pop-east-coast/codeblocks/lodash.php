<!doctype html>
<html>
<head>

	<link href="styles/prism.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<pre style="margin-top: 20px;"><code class='language-js'>//Making a random list for the featured items.
const originalList = useCollection(collection(db, 'figures'));

const randomList = computed(function () {
	return _.shuffle(originalList.value).slice(0, 3);
});</code></pre>
<script src='scripts/prism.js'></script>
</body>
</html>