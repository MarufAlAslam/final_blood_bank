<?php
    $servername ="localhost";
	$username ="root";
	$password ="";
	$databasename ="bloodbank";
	$con = new mysqli($servername, $username, $password, $databasename);
        
        if(isset($_POST['submit_faq'])){
            $qname=$_POST['qname'];
            $question=$_POST['question'];
            $mail=$_POST['qmail'];
            
            $sql = mysqli_query($con, "insert into faq(name,email,question) values ('$qname','$mail','$question')");
        
            header('Location: first_page.php');
            exit;
    }

?>