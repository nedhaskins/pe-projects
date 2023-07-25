<!doctype html>
<html>
<head>

	<link href="styles/prism.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<pre><code class='language-js'>if (!existingCategory) {
   acc.push({
		name: item.cat,
		products: [
			{
				name: item.product,
				price: new Intl.NumberFormat('us-US', { style: 'currency', currency: 'USD' }).format(item.price),
				sale: new Intl.NumberFormat('us-US', { style: 'currency', currency: 'USD' }).format(item.sale),
				isFavorited: false,
				photo: item.cat + "/" + item.product + ".jpg",
			}
		]
	});
});
</code></pre>

	<script src='scripts/prism.js'></script>

</body>
</html>