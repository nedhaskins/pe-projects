<!doctype html>
<html>
<head>

	<link href="styles/prism.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<script type="text/plain" class="language-markup"><RouterLink @click="checkMobileMenu()"
	v-if="user.current && user.role === 'admin'" to="/admin">Dashboard
</RouterLink>
</script>

	<script src='scripts/prism.js'></script>

</body>
</html>