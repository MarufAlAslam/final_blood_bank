<?php
session_start();
// if(isset($_SESSION['Pass'])){
// echo $_SESSION['Pass'];
// }
// else{
//     header('location:user_login.php');
// }
// $var=$_SESSION['Pass'];
if(!$_SESSION['loggedin'])
{
    header('location:user_login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="upanel.css" />
    <script src="main.js"></script>
</head>
<body>

    <br><br><br><br>
<center>
<div style="display: inline-flex ; ">
        <div   style="background-color: cyan ; height: 300px; width: 250px; margin:10px; border: 5px dashed blue">
                <br>
                <img src="icons/profile.png" style="border-radius: 40px; height: 150px; width: 150px;">
                <br><br><br><br>
                <form action="profile.php" method="post">
                <button style="width: 80%;height:50px;" name="btn"><h3>Profile</h3></button>
                </form>
                <?php if(isset($_POST['btn'])){
                    header('Location: profile.php');
                } ?>
                <br><br>
            </div>
            <div   style="background-color:darkseagreen ; height: 300px; width: 250px; margin:10px; border: 5px dashed red">
            <br>
                <img src="icons/messages.png" style="border-radius: 40px; height: 150px; width: 150px;">
                <br><br><br><br>
                <form action="inbox.php" method="post">
                <button style="width: 80%;height:50px;" name="btn"><h3>Messages</h3></button>
                </form>
                <?php if(isset($_POST['btn'])){
                    header('Location: inbox.php');
                } ?>
                <br><br>
                </div>
                <div  style="background-color:lightblue ; height: 300px; width: 250px;margin:10px; border: 5px dashed green">
                <br>
                <img src="icons/req.png" style="border-radius: 40px; height: 150px; width: 150px;">
                <br><br><br><br>
                <form action="request.php" method="post">
                <button style="width: 80%;height:50px;" name="btn"><h3>See Requests</h3></button>
                </form>
                <?php if(isset($_POST['btn'])){
                    header('Location: request.php');
                } ?>
                <br><br>
                    </div>
                    <div  style="background-color: tan ; height: 300px; width: 250px;margin:10px; border: 5px dashed black">
                <br>
                <img src="icons/logout.png" style="border-radius: 40px; height: 150px; width: 150px;">
                <br><br><br><br>
                <form action="logout.php" method="post">
                <button style="width: 80%;height:50px;" name="btn"><h3>Log Out</h3></button>
                </form>
                <?php if(isset($_POST['btn'])){
                    header('Location: logout.php');
                } ?>
                <br><br>
                    </div>
                   
</div>
</center>
</body>
</html>