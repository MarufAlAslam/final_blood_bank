<?php

session_start();

if(!$_SESSION['admin'])
{
    header('location:admin_login.php');
}
$con=mysqli_connect("localhost","root","","bloodbank");


if(isset($_POST['ok'])){
    $user=$_SESSION['Email'];
    $recipient=$_POST['rname'];
    $messaeg=$_POST['msg'];
    $query="insert into inbox(sender,email,message) values ('ADMIN','".$recipient."','".$messaeg."');";
    $sql = mysqli_query($con, $query);
    
echo "<h3>Message sent successfully</h3>";
    header('Location: ainbox.php');
    exit;
}


?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="user_compose.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="go_to_home">
    <h2 class="hh3" style="margin:10px; background-color: #99c2ff;color:red;">
   <center>

    Go to&nbsp; <a href="admin_panel.php">Homepage</a></h2>
</center>
</div>
<center>

<br>

    <div class="composer">
<table>
<form action="#" class="admin_inbox" method="post">
<br>
<tr><label style="color:red">Recipient's Email </label></tr>
<tr>

<select name="rname" style="width:200px;">
<?php 
$res = mysqli_query($con,"select Email from register");
while($row=mysqli_fetch_array($res))
{
?>
<option><?php echo $row["Email"]; ?></option>
<?php
}
?>

</select>

</tr>
<br><br>

<tr><label style="color:red">Your Message </label></tr>
&nbsp;
<tr><input type="text" name="msg" class="msg" placeholder="Your Message" required></tr>
<br><br>
<input type="submit" name="ok" value="Sent" style="width:100px;height:30px; background-color:green;border:2px solid black;">

</form>
<table>
<br>
    </div>
</center>
</body>

</html>