<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="stylesheet" href="css/style.css">-->
	<title></title>


	<style>

		body {
			padding: 20px;
		}

		field {
			display: flex;
			flex-direction: column;
		}

		form {
			max-width: 400px;
		}

		form :is(field + field), button {
			margin-top: 20px;
		}

		button {
			background-color: lime;
			padding: 20px;
			border-radius: 20%;
		}

	</style>
</head>
<body>

</body>
</html>



<form>
	<field>
		<label>Input a string</label>
		<input placeholder="Vega">
	</field>

	<field>
		<label>A number</label>
		<input type="number">
	</field>

	<button>Submit</button>







</form>




	</field>