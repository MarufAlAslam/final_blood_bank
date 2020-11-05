<?php
session_start();
$host="localhost";
$user="root";
$password="";
$database="bloodbank";


$errors=array();
$con = new mysqli($host, $user, $password, $database);

if(isset($_POST['lmail'])){
$email=$_POST['lmail'];
$pass=$_POST['lpass'];

$sql="select * from register where Email='".$email."' AND Password='".$pass."' limit 1";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)==1){
    $_SESSION['Email']=$email;
    $_SESSION['Pass']=$pass;
    $_SESSION['loggedin'] = true;
    header('Location: user_panel.php');
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
            <link rel="stylesheet" type="text/css" href="user.css" />
        <title>User Login Page</title>
    </head>
    <body>
            <div class="go_to_home">
                    <h2 class="hh3" style="margin:10px; background-color: #99c2ff;">
                    <center>
                    Go to&nbsp; <a href="first_page.php">Home</a></h2>
</center>
                    </div>

                    <?php include('register_error.php');?>
        <div class="login">
                <form action="user_login.php" method="post" class="login_form">
                        <label style="font-size:30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USER LOGIN</label>
                        <hr><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>E-mail</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="lmail" class="lmail" placeholder="Enter your email here" required>
                        <br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>Password</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="password" name="lpass" class="lpass" placeholder="Password" required>
                            <br><br>
                            
                            <input type="submit" name="llogin" value="Login" style="margin-left:178px;height:30px;width:100px; border-radius:20px;background-color: burlywood;font-size:15px;color:red;opacity:1;">
                            <h3 style="margin:10px;color: red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not Yet Registered? <a href="register.php">Register</a> Here</h3>
   
                            </form>
        </div>
    </body>
</html>
    