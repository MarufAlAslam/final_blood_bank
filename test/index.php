<?php
 require_once('../PHPMailer/PHPMailerAutoload.php');

 $mail = new PHPMailer();
 $mail->isSMTP();
 $mail->SMTPAuth =  true;
 $mail->SMTPSecure = 'ssl';
 $mail->Host = 'smtp.gmail.com';
 $mail->Port = '587';
  $mail->isHTML();
   $mail->Username = 'nsumi7723@gmail.com';
    $mail->Password = '3277imusn';
     // $mail->SetFrom =''
      $mail->setFrom('shadikmeshkat328@gmail.com', 'PSTU Library');
      $mail->Subject = 'Hello World!';
       $mail->Body = 'a test mail';
       $mail->AddAddress('marufalaslam@gmail.com');
      
        if($mail->Send()){
        echo 'Message has been sent';
        }
        else
        {
                echo "Mailer Error: " . $mail->ErrorInfo;
        }

// $adminmail = new PHPMailer();
// $adminmail -> isSMTP();
// $usermail = new PHPMailer();
// $usermail -> isSMTP();
// sendEmail($adminmail, $from, $password, $maiAdmin, $body, $subject);
// $userMessage = "We Received your request. Our representative will contact you soon.";
// sendEmail($usermail, $from, $password, $email, $userMessage, 'Acknowlwdgement');
?>