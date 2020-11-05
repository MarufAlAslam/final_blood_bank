<?php

if(isset($_POST['submit_faq'])){
    $mailto = $_POST['mail_to'];
    $mailSub = "Reply from Admin,SBB";
    $mailMsg = $_POST['mail_msg'];
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "marufalaslam@gmail.com";
   $mail ->Password = "Maruf9876";
   $mail ->SetFrom("marufalaslam@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
    echo '<script language="javascript">';
    echo 'alert("Mail Not Sent")';
    echo '</script>';
   }
   else
   {
    
    echo '<script language="javascript">';
    echo 'alert("Mail Successfully Sent")';
    echo '</script>';
   }
}
?>
