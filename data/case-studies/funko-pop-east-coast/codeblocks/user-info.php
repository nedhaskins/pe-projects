<!doctype html>
<html>
<head>

	<link href="styles/prism.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<script type="text/plain" class="language-markup"><div v-if="user.current" class="user-prompts">
	<span id="result">Hi, {{ user.userDoc?.firstName }}</span>
	<button class="logout" @click="user.signOut()">Logout</button>
</div>
<svg-wrapper v-if="!user.current" class="user-icon">
	<RouterLink to="/signin-page">
		<UserIcon />
	</RouterLink>
</svg-wrapper>
</script>

	<script src='scripts/prism.js'></script>

</body>
</html>