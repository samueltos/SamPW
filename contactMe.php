<?php

// // Please specify your Mail Server - Example: mail.yourdomain.com.
// ini_set("SMTP","mail.swordconsolutions.com");

// // Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
// ini_set("smtp_port","25");

// // Please specify the return address to use
// ini_set('sendmail_from', 'sam.akins@swordconsolutions.com');



// ini_set('SMTP', "server.com");
// ini_set('smtp_port', "25");
// ini_set('sendmail_from', "email@domain.com");


if($_POST["submit"]) {
    $recipient="samueltos1@gmail.com";
    $subject="New Message";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>