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

$response = "";

$formSubmitted = isset($_POST['submitted']);

if($formSubmitted) {

	$formData = "";

	foreach($_POST as $key => $value) {
		$formData .= $key . ": " . $value . "\n";
	}
	mail('info@ninjastrings.net', 'Test 1/7/23', $formData);
	$response = "The email was sent!";

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

		<button-wrapper>
			<button class="contact-submit" type="submit" name="submitted">Submit</button>
		</button-wrapper>
		
	</form>

<p class='form-response'><?=$response?></p>

</section> <!--contact-->