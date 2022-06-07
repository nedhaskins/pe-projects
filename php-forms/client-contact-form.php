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


<style>
	
	label, input, button {
		border: 3px solid red;
	}

	label, input {
		display: block; /*just setting these up as block-level
		elements instead of inline-block*/
	}

	form {
		max-width: 400px;
		border: 1px solid green;
	}

	.field {
		border: 3px solid blue;
		display: flex;
		flex-direction: column;
	}
 
	.field label {
		font-size: 14px;
		margin-bottom: 4px;
	}

	button[type="submit"], .field + .field {
		margin-top: 10px ;
	}



</style>

<form method='POST'>

	<p>Client Contact Form</p>


	<div class='field'>

		<label>Email</label>
		<input type='email' name='email'> <!--the "name" attribute is pointing to the actual "name" that this is going to be referred to elsewhere in the code, like in CSS for styling, and in the resulting array when data is entered by the user -->

	</div>

	<div class='field'>

		<label>Message</label>
		<input type='text' name='message'>

	</div>


	<button type='submit' name='submitted'>Submit
	</button>

</form>