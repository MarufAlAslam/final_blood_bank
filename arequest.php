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
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="arequest.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="go_to_home">
    <center>
    <h2 class="hh3" style="margin:10px; background-color: #99c2ff;color:red;">
    Go to&nbsp; <a href="admin_panel.php">Homepage</a></h2>
</center>
    </div>

    <div class="form_group">
                <table style="border-collapse: collapse;
    width: 100%;
    background: beige;
    font-family: monospace;
    font-size: 20px;
    text-align: left;">
    <br>
    <center>
        <div style="background-color:black">
    <label class="text" style="font-size:30px;color:white;">Completed Transaction</label>
</div>
                <tr style="background-color:darkseagreen">
                <th>ID</th>
                    <th>Patient Name</th>
                    
                    
                    <th>Blood Group</th>
                    
                    <th>Date</th>
                    
                </tr>

                <?php
               
                $con=mysqli_connect("localhost","root","","bloodbank");
                if($con->connect_error){
                    die("conection failed: ".$con->connect_error);
                }

                $sql="select id,patient_name,blood_group,date from apply";
                $result=$con->query($sql);

                if($result->num_rows>0){
                    
                    while($row=$result->fetch_assoc()){
                        echo "<tr class='tbl_tr'><td>".$row["id"]."</td><td>".$row["patient_name"]."</td><td>".$row["blood_group"]."</td><td>".$row["date"]."</td></tr>";
                    }
                    echo "</table>";
                }

                else{
                    echo "0 Result found";
                }
                $con->close();
            
                ?>
                    
               
              
            </div>
</body>
</html>