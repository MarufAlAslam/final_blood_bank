<?php

session_start();
$con=mysqli_connect("localhost","root","","bloodbank");


if(isset($_POST['ok'])){
    $user=$_SESSION['Email'];
    $recipient=$_POST['rname'];
    $messaeg=$_POST['msg'];
    $query="insert into inbox(sender,email,message) values ('".$user."','".$recipient."','".$messaeg."');";
    $sql = mysqli_query($con, $query);
    
echo "<h3>Message sent successfully</h3>";
    header('Location: user_compose.php');
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
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    Go to&nbsp; <a href="user_panel.php">Homepage</a></h2>
</div>
<center>
    <div class="composer">
<br>
<table>
<form action="#" class="user_inbox" method="post">
<tr><label style="color:red">Your Username: </label></tr>
<tr>
<?php 
echo $_SESSION['Email']; 
?></tr>
<br><br>
<tr><label style="color:red">Recipient's Email </label></tr>
<tr>

<select name="rname">
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