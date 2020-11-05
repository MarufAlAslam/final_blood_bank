<?php

session_start();
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
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="request.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="go_to_home">
    <h2 class="hh3" style="margin:10px; background-color: #99c2ff;color:red;">
    <center>

    Go to&nbsp; <a href="user_panel.php">Homepage</a></h2>
</center>
    </div>

    <div class="form-group">
                <table style="border-collapse: collapse;
    width: 100%;
    background: beige;
    font-family: monospace;
    font-size: 20px;
    text-align: left;">
                <tr style="background-color:yellow">
                <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Blood Group</th>
                    <th>Disease</th>
                    <th>Date</th>
                    <th>Mobile</th>
                </tr>

                <?php
               
                $con=mysqli_connect("localhost","root","","bloodbank");
                if($con->connect_error){
                    die("conection failed: ".$con->connect_error);
                }

                $sql="select id,name,age,gender,bgroup,disease,date,phone from add_patient";
                $result=$con->query($sql);

                if($result->num_rows>0){
                    
                    while($row=$result->fetch_assoc()){
                        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["bgroup"]."</td><td>".$row["disease"]."</td><td>".$row["date"]."</td><td>".$row["phone"]."</td></tr>";
                    }
                    echo "</table>";
                }

                else{
                    echo "0 Result found";
                }
                $con->close();
            
                ?>
                    
               
              
            </div>
            <center>
            <div style="background-color:black;color:white;font-size:30px;">Apply Section</div>
            <div class="select" style="border:3px solid black;padding:10px;width:500px;">
            <form action="request.php" method="post">
            <label style="font-size:20px;">Select for Apply</label>
            <select name="rname" style="width:200px;height:50px;">
    <?php 
    $con=mysqli_connect("localhost","root","","bloodbank");
               $res = mysqli_query($con,"select id from add_patient");
               while($row=mysqli_fetch_array($res))
             {
                ?>
            <option><?php echo $row["id"]; ?></option>
            <?php
            }
            ?>

</select>
<input type="submit" value="Apply" name="option" style="background-color:green;height:50px;width:100px;">
            </form>
            </div>
            </center>


            <?php
           $con=mysqli_connect("localhost","root","","bloodbank");
           if($con->connect_error){
               die("conection failed: ".$con->connect_error);
           }
            if(isset($_POST['option'])){
                $id=$_POST['rname'];
                $var=$_SESSION['Email'];
                
                $sql1="insert into apply(patient_name,blood_group,date) select name,bgroup,date from add_patient where id='$id' ";
                $result1=mysqli_query($con,$sql1);

                $sql2="delete from add_patient where id='$id'";
                $result2=mysqli_query($con,$sql2);
                //insert 
                //$res=mysqli_query($con,$s); 
            }

            ?>
</body>
</html>