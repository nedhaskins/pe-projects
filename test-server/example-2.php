<?php

if ( isset($_POST['submit']) ) {
    $to = "info@perpetual.education";
    $subject = "Message from Website";
    $message = "This is an example message";
    $from = "exampleEmail@thing.com";
    $headers = "From:" . $from;
    
    mail($to, $subject, $message, $headers);
  } 

?>

<contact-form>

  <h2>Server email test...</h2>

  <form method="POST">
    <field>
      <input id="name" type="text" name="name" />
    </field>

    <button type="submit" name="submit">Send</button>
  </form>

</contact-form>