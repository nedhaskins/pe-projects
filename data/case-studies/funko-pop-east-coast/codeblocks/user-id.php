<!doctype html>
<html>
<head>

	<link href="styles/prism.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<pre><code class='language-js'>const userDoc = useDocument(docReference);
const role = computed(() => userDoc.value?.role);
const name = computed(() => userDoc.value?.name);</code></pre>
<script src='scripts/prism.js'></script>
</body>
</html>