<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<?php 

if( isset($_POST['submitted']) ) {

	$to = 'info@ninjastrings.net';
	$subject = 'TEST EMAIL';
	$from = "exampleEmail@thing.com";
   $headers = "From:" . $from;
	
	mail($to, $subject, 'test content', $headers);

	echo "Command received";

};



?>

<section class="contact">

	<contact-header>

		<h1>Let's get started.</h1>

		<p>How can we help with your event or project today?</p>
		<p>Please be as specific as possible!</p>
		<p>You'll receive a response within 24 hours.</p>
		<p>We're looking forward to working with you!</p>
	</contact-header>

	<form method='POST'>

		<field>
			<label>Name</label>
			<input name='name' type='text'>
		</field>

		<button type="submit" name="submitted">Submit</button>

	</form>



</section> <!--contact-->

</body>
</html>

