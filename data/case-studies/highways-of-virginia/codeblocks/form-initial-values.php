<!doctype html>
<html>
<head>

	<link href="styles/prism.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<pre><code class="language-php">//Setting initial conditions for the form – blank values if none are fetched, values from the database if values are found.
$type = $highway['type'] ?? false;
$number = $highway['number'] ?? false;
$lengthInMiles = $highway['length'] ?? false;
$startLocation = $highway['startLocation'] ?? false;
$endLocation = $highway['endLocation'] ?? false;
$image = $highway['image'] ?? false;
$description = $highway['description'] ?? false;
</code></pre>

	<script src='scripts/prism.js'></script>

</body>
</html>