<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<title></title>
</head>
<body>

</body>
</html>


<?php 

//$stuff = $_POST;  //$stuff will be where all the submitted stuff from the form lives on the server


//print_r($stuff);
//var_dump($stuff); //these two functions do the same thing


	if ( isset($_POST["submitted"]) ) {
		echo "Form submitted successfully.";
	
	} else {
		echo "Need something here.";
	}


?>



</style>

<form method='POST'>

	<h1>Client Contact Form</h1>


	<field>

		<label>Email</label>
		<input type='email' name='email'> <!--the "name" attribute is pointing to the actual "name" that this is going to be referred to elsewhere in the code, like in CSS for styling, and in the resulting array when data is entered by the user -->

	</field>

	<field>

		<label>Message</label>
		<input type='text' name='message'>

	</field>


	<button type='submit' name='submitted'>Submit
	</button>

</form>