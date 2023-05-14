<!doctype html>
<html>
<head>

	<link href="styles/prism.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<pre><code class='language-js'>export const useCartService = defineStore('cart', function () {
	
	//Grab the current user data using Pinia.
	const user = useUserService();
	
	//Grab the Firestore database using Pinia.
	const db = useFirestore();

	//This variable can be called later to reference the cart
	//instead of having to redo all of the logic inside this function.
	const cartReference = computed(function () {

		//if a user's currently logged in
		if (user.current) {
			
			//find the cart object of that user in the Firestore database.
			return collection(db, 'users', user.current.uid, 'cart');
		} else {
		
			//don't return anything.
			return false;
		}
	});
</code></pre>

	<script src='scripts/prism.js'></script>

</body>
</html>