<?php

//compile message
$message = '';
foreach( $_POST as $name => $value ) {
   if ( 'submit' != $name ) {
       if ( is_array( $value ) ) {
           $value = implode( ', ', $value );
       }
        $message .= ucfirst( $name ) . "is $value.\n\n";
   }
}

$to = "Tim Windhorst<atimw36@gmail.com>";
$subject = "Reson for contact: " . $_POST['reason'];
$headers = 'From: webmaster@example.com' . "\r\n" .
'Reply-To: webmaster@example.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
if (mail($to, $subject, $message, $headers)){
    echo "<h3>Your message has been sent.</h3>";
}