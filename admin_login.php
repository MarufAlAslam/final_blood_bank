<?php
session_start();
$host="localhost";
$user="root";
$password="";
$database="bloodbank";

$errors=array();
$con = new mysqli($host, $user, $password, $database);

if(isset($_POST['alogin'])){
$email=$_POST['amail'];
$pass=$_POST['apass'];

$sql="select * from admin where email='".$email."' AND password='".$pass."' limit 1";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)==1){
    $_SESSION['email']=$email;
    $_SESSION['admin'] = true;
//    $_SESSION
    header('Location: admin_panel.php');
    exit;
}
else{
    array_push($errors,"Incorrect Username or Password");
}
}

?>




<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="admin.css" />
        <title>User Login Page</title>
    </head>
    <body>
            <div class="go_to_home">
                    <h2 class="hh3" style="margin:10px; background-color: #99c2ff;">
                    <center>
                
                    Go to&nbsp; <a href="first_page.php">Home</a></h2>
</center>
                    <?php include('register_error.php');?>
                    </div>
        <div class="login">
                <form action="admin_login.php" method="post" class="login_form">

                        <label style="font-size:30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADMIN LOGIN</label>
                            <hr><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>E-mail</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="amail" class="amail" placeholder="Enter your email here" required>
                        <br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>Password</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="password" name="apass" class="apass" placeholder="Password" required>
                            <br><br>
                            
                            <input type="submit" name="alogin" value="Login" style="margin-left:178px;height:30px;width:100px; border-radius:20px;background-color: burlywood;font-size:15px;color:red;opacity:1;">
                            
                            </form>
        </div>
    </body>
</html>