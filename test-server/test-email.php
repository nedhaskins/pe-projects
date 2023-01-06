// 1

<?php
$emailA = "a@b";
$emailB = "a@b";
$errorMessage = "Go on...";


// maybe....
if ( isset( $_POST["submitted"] ) ) {

	if ( isset($_POST["email1"] )) {
		$emailA = $_POST["email1"];
	}
	if ( isset($_POST["email2"]) ) {
		$emailB = $_POST["email2"];
	}

	if ( $emailA != $emailB ) {
		$errorMessage = "<span class='error'>Your emails do not match.</span>";
	}

	if ( $emailA === $emailB && !isset( $_POST["hidden-bot-tricker"] )) {
		$errorMessage = "<span class='success'>You Win!</span>";

		$sent = mail("info@perpetual.education", "Testing mail function", "This is the message from $emailA");

		if ($sent) {
			echo "It worked!";
		} else {
			echo "nope... fail....";
		}
	}

	// if ( isset( $_POST["hidden-bot-tricker"] ) ) {
	// 	if ( $_POST["hidden-bot-tricker"] ) {
	// 		$errorMessage = "You're a bot!!! We're not sending that email.";
	// 	}
	// }

}

?>

<!-- 4. Template -->
<form method="POST">

	<field>
		<label>Email</label>
		<input type='email' name="email1" value="<?=$emailA?>" required placeholder="person@place.place">
	</field>

	<field>
		<label>Double check email</label>
		<input type='email' name="email2" value="<?=$emailB?>" required placeholder="person@place.place">

		<p><?=$errorMessage?></p>
	</field>

	<!-- <input class="hidden" type="text" name='hidden-bot-tricker'> -->

	<button type="submit" name="submitted">
		Submit
	</button>

</form>