<!doctype html>
<html>
<head>

	<link href="styles/prism.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<script type="text/plain" class="language-markup"><ul class="figure-list" v-if="favoritedFigures">
	<li v-for="card in favoritedFigures">
		<FigureCard :figure="card" />
	</li>
</ul>
</script>

	<script src='scripts/prism.js'></script>

</body>
</html>