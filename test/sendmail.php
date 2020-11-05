<?php
/**
 * This example shows sending a message using a local sendmail binary.
 */

require '../PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();
//Set who the message is to be sent from
$mail->setFrom('nsumi7723@gmail.com', 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo('shadikmeshkat328@gmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('marufalaslam@gmail.com', 'John Doe');
//Set the subject line
$mail->Subject = 'PHPMailer sendmail test';
$mail->Body='hello';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('examples/contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment('examples/images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
