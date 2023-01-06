<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<?php 

$name = "";
$emailAddress = "";
$phoneNumber = "";
$eventDate = "";
$eventTime = "";
$eventLocation = "";
$message = "";


$contactArray = [];

if( isset($_POST['submitted']) ) {

	$formContent = "
		Name: " . $_POST['name'] ."\n
		Email Address: " . $_POST['email-address'] . "\n
		Phone Number: " . $_POST['phone-number'] . "\n
		Event Date: " . $_POST['event-date'] . "\n
		Event Time: " . $_POST['event-time'] . "\n
		Event Location: " . $_POST['event-location'] . "\n
		Message: " . $_POST['message']
	;
	

	// array(
	// 	'name' => $_POST['name'],
	// 	'emailAddress' => $_POST['email-address'],
	// 	'phoneNumber' => $_POST['phone-number'],
	// 	'eventDate' => $_POST['event-date'],
	// 	'eventTime' => $_POST['event-time'],
	// 	'eventLocation' => $_POST['event-location'],
	// 	'message' => $_POST['message'],
	// );

	show($formContent);

	mail('info@ninjastrings.net', 'TEST EMAIL', 'test content');

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
			<input name='name' type='text' value='<?=$name?>'>
		</field>

		<field>
			<label>Email Address</label>
			<input name='email-address' type='email' value='<?=$emailAddress?>'>
		</field>

		<field>
			<label>Phone Number</label>
			<input name='phone-number' type='tel' value='<?=$phoneNumber?>'>
		</field>

		<field>
			<label>Event Date</label>
			<input name='event-date' type='date' value='<?=$eventDate?>'>
		</field>

		<field>
			<label>Event Start Time</label>
			<input name='event-time' type='time' value='<?=$eventTime?>'>
		</field>

		<field>
			<label>Event Location</label>
			<input name='event-location' type='text' value='<?=$eventLocation?>'>
		</field>
		
		<field>
			<label>Message</label>
			<textarea name='message' rows='20' value='<?=$message?>'></textarea>
		</field>

		<button type="submit" name="submitted">Submit</button>

	</form>



</section> <!--contact-->

</body>
</html>

