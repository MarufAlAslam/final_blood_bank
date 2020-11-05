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
    <title>News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="go_to_home">
    <h2 class="hh3" style="margin:10px; background-color: #99c2ff;color:red;">
   <center>

    Go to&nbsp; <a href="admin_panel.php">Homepage</a></h2>
</center>
</div>
<br>

<center>
<label style="font-size:30px;width:400px;background-color:tan"> Update News Section</label>
<br><br>

<div style="border:3px solid green;padding:5px;width:70%;border-radius:100px;">
    <form action="#" method="post">
    <Label style="font-size:20px;">News:</Label>
    <input type="text" name="news" style="width:500px;height:50px;" required>
    <br>
    <br>
    <input type="submit" name="submit" value="SUBMIT" style="width:300px;height:30px;background-color:green;font-size:20px">
    </form>
    </div>
    <br>
    </center>
    <center>
    <label style="font-size:30px;width:100%;background-color:tan"> Previous News Section</label>
    </center>
    <center>
    <div class="form-group" style="width:70%">
                <table style="border-collapse: collapse;
    width: 100%;
    background: beige;
    font-family: monospace;
    font-size: 20px;
    text-align: left;">
                <tr style="background-color:yellow">
                    <th>ID</th>
                    <th>News</th>
                </tr>

                <?php
               
                $con=mysqli_connect("localhost","root","","bloodbank");
                if($con->connect_error){
                    die("conection failed: ".$con->connect_error);
                }

                $sql="select id,news from news order by id DESC";
                $result=$con->query($sql);

                if($result->num_rows>0){
                    
                    while($row=$result->fetch_assoc()){
                        echo "<tr><td>".$row["id"]."</td><td>".$row["news"]."</td><td></tr>";
                    }
                    echo "</table>";
                }

                else{
                    echo "0 Result found";
                }
                $con->close();
            
                ?>
                    
               
              
            </div>
            </center>
</body>
</html>

<?php

$host="localhost";
$user="root";
$password="";
$database="bloodbank";

$con = new mysqli($host, $user, $password, $database);

if(isset($_POST['submit'])){
$news=$_POST['news'];

$sql="insert into news(news) values('$news')";

$result=mysqli_query($con,$sql);
}
?>