<?php
session_start();

if(!$_SESSION['admin'])
{
    header('location:admin_login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="apanel.css" />
    <script src="main.js"></script>
</head>
<body>

<center>
<div style="display: inline-flex ; ">
        <div   style="background-color: cyan ; height: 300px; width: 300px; margin:10px; border: 5px dashed blue;border-radius:20px">
                <br>
                <img src="icons/profile.png" style="border-radius: 40px; height: 150px; width: 150px;">
                <br><br><br><br>
                <form action="aprofile.php" method="post">
                <button style="width: 80%;height:50px;" name="btn"><h3>Manage Profiles</h3></button>
                </form>
                <?php if(isset($_POST['btn'])){
                    header('Location: aprofile.php');
                } ?>
                <br><br>
            </div>
            <div   style="background-color:darkseagreen ; height: 300px; width: 300px; margin:10px; border: 5px dashed red;border-radius:20px">
            <br>
                <img src="icons/messages.png" style="border-radius: 40px; height: 150px; width: 150px;">
                <br><br><br><br>
                <form action="ainbox.php" method="post">
                <button style="width: 80%;height:50px;" name="btn"><h3>Messages</h3></button>
                </form>
                <?php if(isset($_POST['btn'])){
                    header('Location: ainbox.php');
                } ?>
                <br><br>
                </div>
                <div  style="background-color:lightblue ; height: 300px; width: 300px;margin:10px; border: 5px dashed green;border-radius:20px">
                <br>
                <img src="icons/req.png" style="border-radius: 40px; height: 150px; width: 150px;">
                <br><br><br><br>
                <form action="arequest.php" method="post">
                <button style="width: 80%;height:50px;" name="btn"><h3>Blood Transactions </h3></button>
                </form>
                <?php if(isset($_POST['btn'])){
                    header('Location: arequest.php');
                } ?>
                <br><br>
                </div>
                <div  style="background-color:steelblue ; height: 300px; width: 300px;margin:10px; border: 5px dashed yellow;border-radius:20px">
                <br>
                <img src="icons/faqs.png" style="border-radius: 40px; height: 150px; width: 150px;">
                <br><br><br><br>
                <form action="afaq.php" method="post">
                <button style="width: 80%;height:50px;" name="btn"><h3>Manage FAQs</h3></button>
                </form>
                <?php if(isset($_POST['btn'])){
                    header('Location: afaq.php');
                } ?>
                
                    </div>
                   
</div>
<br>
<div style="display: inline-flex ; ">
        
            
<div  style="background-color: cadetblue ; height: 300px; width: 300px;margin:10px; border: 5px dashed white;border-radius:20px">
                <br>
                <img src="icons/compose.png" style="border-radius: 40px; height: 150px; width: 150px;">
                <br><br><br><br>
                <form action="4-fetch.php" method="post">
                <button style="width: 80%;height:50px;" name="btn"><h3>Gallery</h3></button>
                </form>
                <?php if(isset($_POST['btn'])){
                    header('Location: 4-fetch.php');
                } ?>
                <br><br>

                    </div>
                    

                    <div  style="background-color: pink ; height: 300px; width: 300px;margin:10px; border: 5px dashed red;border-radius:20px">
                <br>
                <img src="icons/news.png" style="border-radius: 40px; height: 150px; width: 150px;">
                <br><br><br><br>
                <form action="news.php" method="post">
                <button style="width: 80%;height:50px;" name="btn"><h3>Update News</h3></button>
                </form>
                <?php if(isset($_POST['btn'])){
                    header('Location: news.php');
                } ?>
                <br><br>
                
                    </div>

                    <div  style="background-color: tan ; height: 300px; width: 300px;margin:10px; border: 5px dashed black;border-radius:20px">
                <br>
                <img src="icons/logout.png" style="border-radius: 40px; height: 150px; width: 150px;">
                <br><br><br><br>
                <form action="admin_logout.php" method="post">
                <button style="width: 80%;height:50px;" name="btn"><h3>Log Out</h3></button>
                </form>
                <?php if(isset($_POST['btn'])){
                    header('Location: admin_logout.php');
                } ?>
                <br><br>
                
                    </div>
                   
</div>
</center>
</body>
</html>