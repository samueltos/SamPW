<?php


if(isset($_POST["submit"])){


require 'PHPMailerAutoload.php';
require 'phpmailer/class.phpmailer.php';
require 'credential.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'tls://smtp.gmail.com:587';  					// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                			 // SMTP username
$mail->Password = PASS;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                                                 // TCP port to connect to

$mail->setFrom($_POST['email'], 'New Message');
$mail->addAddress(EMAIL);    				 // Add a recipient

$mail->addReplyTo(EMAIL);


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'New Message';
$mail->Body    = $_POST['message'];
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<script type="text/javascript">window.location = "thankyou.html"</script>';
}


}

?>