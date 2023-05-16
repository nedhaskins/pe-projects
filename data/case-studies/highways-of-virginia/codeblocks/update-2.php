<!doctype html>
<html>
<head>

	<link href="styles/prism.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<pre><code class="language-php">$highways = getHighways();
$highways[$currentHighwayId] = $highway;

$json = json_encode($highways);
file_put_contents('data/highways.json', $json);

$response = 'The route was successfully updated!';
</code></pre>

	<script src='scripts/prism.js'></script>

</body>
</html>