<?php 

function showErrors() {
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);
}

showErrors();

function show($things) { //$things = any set variable
	echo "<code class='show-code'>";
	echo '<pre>';
	print_r($things);
	echo '</pre>';
	echo '</code>';
}


$name = "";
$emailAddress = "";
$phoneNumber = "";
$eventDate = "";
$eventTime = "";
$eventLocation = "";
$description = "";

$hasName = false;
$hasEmail = false;
$hasPhone = false;
$hasDate = false;
$hasTime = false;
$hasLocation = false;
$hasMessage = false;

$response = "";

$formSubmitted = isset($_POST['submitted']);

if($formSubmitted) {

	if( isset($_POST['name']) ) {
		$name = $_POST['name'];
		if($name) {
			$hasName = true;
		}
	}

	if( isset($_POST['email-address']) ) {
		$emailAddress = $_POST['email-address'];
		if($emailAddress) {
			$hasEmail = true;
		}
	}

	if( isset($_POST['phone-number']) ) {
		$phoneNumber = $_POST['phone-number'];
		if($phoneNumber) {
			$hasPhone = true;
		}
	}

	if( isset($_POST['event-date']) ) {
		$eventDate = $_POST['event-date'];
		if($eventDate) {
			$hasDate = true;
		}
	}

	if( isset($_POST['event-time']) ) {
		$eventTime = $_POST['event-time'];
		if($eventTime) {
			$hasTime = true;
		}
	}

	if( isset($_POST['event-location']) ) {
		$eventLocation = $_POST['event-location'];
		if($eventLocation) {
			$hasLocation = true;
		}
	}

	if( isset($_POST['message']) ) {
		$message = $_POST['message'];
		if($message) {
			$hasMessage = true;
		}
	}

	$allInfoFilledOut = $hasName && $hasEmail && $hasPhone && $hasDate && $hasTime && $hasLocation && $hasMessage;

	if($allInfoFilledOut) {

		$formContent = "
			Name: " . $name . "\n
			Email Address: " . $emailAddress . "\n
			Phone Number: " . $phoneNumber . "\n
			Event Date: " . $eventDate . "\n
			Event Time: " . $_POST['event-time'] . "\n
			Event Location: " . $_POST['event-location'] . "\n
			Message: " . $_POST['message']
		;
		
		show($formContent);

		mail('info@ninjastrings.net', 'TEST EMAIL', $formContent);

		$response = "The email was sent!";
	} else {
		$response = "There was a problem. :/";
	}
} else {
	echo "Form hasn't been submitted yet.";
}
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
			<input name='name' type='text' required>
		</field>

		<field>
			<label>Email Address</label>
			<input name='email-address' type='email' required>
		</field>

		<field>
			<label>Phone Number</label>
			<input name='phone-number' type='tel' required>
		</field>

		<field>
			<label>Event Date</label>
			<input name='event-date' type='date' required>
		</field>

		<field>
			<label>Event Start Time</label>
			<input name='event-time' type='time' required>
		</field>

		<field>
			<label>Event Location</label>
			<input name='event-location' type='text' required>
		</field>
		
		<field>
			<label>Message</label>
			<textarea name='message' rows='20' required></textarea>
		</field>

		<button type="submit" name="submitted">Submit</button>

	</form>

<p class='form-response'><?=$response?></p>

</section> <!--contact-->

