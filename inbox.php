<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="inbox.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="go_to_home">
    <h2 class="hh3" style="margin:10px; background-color: #99c2ff;color:red;">
<center>
    Go to&nbsp; <a href="user_panel.php">Homepage</a></h2>
</center>
</div>
<center>
    <br><br><br><br><br>
<div style="display: inline-flex ; ">

<div   style="background-color: cyan ; height: 300px; width: 250px; margin:10px; border: 5px dashed blue">
                <br>
                <img src="icons/messages.png" style="border-radius: 40px; height: 150px; width: 150px;">
                <br><br><br><br>
                <form action="user_inbox.php" method="post">
                <button style="width: 80%;height:50px;" name="btn"><h3>INBOX</h3></button>
                </form>
                <?php if(isset($_POST['btn'])){
                    //header('Location:user_inbox.php');
                } ?>
                <br><br>
            </div>
<div   style="background-color:darkseagreen ; height: 300px; width: 250px; margin:10px; border: 5px dashed red">
            <br>
                <img src="icons/compose.png" style="border-radius: 40px; height: 150px; width: 150px;">
                <br><br><br><br>
                <form action="user_compose.php" method="post">
                <button style="width: 80%;height:50px;" name="btn"><h3>COMPOSE</h3></button>
                </form>
                <?php if(isset($_POST['btn'])){
                    //header('Location: user_compose.php');
                } ?>
                <br><br>
                </div>
                
</div>
<center>


    
</body>
</html>