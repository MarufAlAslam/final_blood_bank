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
    <link rel="stylesheet" type="text/css" media="screen" href="request.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="go_to_home">
    <h2 class="hh3" style="margin:10px; background-color: #99c2ff;color:red;">
    <center>

    Go to&nbsp; <a href="admin_panel.php">Homepage</a></h2>
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
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Blood Group</th>
                    <th>City</th>
                    <th>Mobile</th>
                    <th>Password</th>
                </tr>

                <?php
               
                $con=mysqli_connect("localhost","root","","bloodbank");
                if($con->connect_error){
                    die("conection failed: ".$con->connect_error);
                }
                
                $sql="select First_name,Last_name,Email,DOB,Blood_group,Gender,City,Mobile,Password from register";
                $result=$con->query($sql);

                

                if($result->num_rows>0){
                    
                    while($row=$result->fetch_assoc()){
                        echo "<tr><td>".$row["First_name"]."</td><td>".$row["Last_name"]."</td><td>".$row["Email"]."</td><td>".$row["DOB"]."</td><td>".$row["Blood_group"]."</td><td>".$row["Gender"]."</td><td>".$row["City"]."</td><td>".$row["Mobile"]."</td><td>".$row["Password"]."</td><td></tr>";
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
<div style="background-color:black;color:white;font-size:30px;">Operation Section</div>
            <div class="select" style="border:3px solid black;padding:10px;width:500px;">
            <form action="aprofile.php" method="post">
            <label style="font-size:20px;">Select for operation</label>
            <select name="rname" style="width:200px;height:50px;">
    <?php 
    $con=mysqli_connect("localhost","root","","bloodbank");
               $res = mysqli_query($con,"select Email from register");
               while($row=mysqli_fetch_array($res))
             {
                ?>
            <option><?php echo $row["Email"]; ?></option>
            <?php
            }
            ?>

</select>
<input type="submit" value="FIND" name="operation" style="background-color:green;height:50px;width:100px;">
            </form>
            </div>
            </center>


        <?php
        if(isset($_POST['operation'])){
            $name=$_POST['rname'];
            $_SESSION['Email']=$name;
            $var=$_SESSION['Email'];

            
            
        }
        ?>
<div class="beside" style="display:inline-flex;">

    <div class="buttons" style="border-collapse: collapse;
width: 300px;;
background: beige;
font-family: monospace;
font-size: 20px;
text-align: left;
padding:5px;
margin-left:280px;
border-top: 10px solid green;
border-left: 10px solid red;
border-bottom: 10px solid blue;
border-right: 10px solid yellow;">
    <form action="#" method="post">
    <input type="submit" value="Delete Account" name="delete" style="height:105px;width:100%;font-size:20px;background-color:red">
    <input type="submit" value="Appoint as Admin" name="appoint" style="height:105px;width:100%;font-size:20px;background-color:green">
    </form>
    </div>
    <div class="form-group">
    
    <table style="border-collapse: collapse;
width: 500px;;
background: beige;
font-family: monospace;
font-size: 20px;
text-align: left;
padding:5px;
border-top: 10px solid green;
border-left: 10px solid red;
border-bottom: 10px solid blue;
border-right: 10px solid yellow;">
    

    <?php
   
    $con=mysqli_connect("localhost","root","","bloodbank");
    if($con->connect_error){
        die("conection failed: ".$con->connect_error);
    }
    $var=$_SESSION['Email'];
    $sql="select First_name,Last_name,Email,DOB,Blood_group,Gender,City,Mobile,Password from register where Email='".$var."'";
    $result=$con->query($sql);
    
    if($result->num_rows>0){
        
        while($row=$result->fetch_assoc()){
            echo 
            "
            <center><tr>
            <th>First Name</th>
            <td>".$row["First_name"]."</td>
            </tr></center>

            <tr>
            <th>Last Name</th>
            <td>".$row["Last_name"]."</td>
            </tr>

            <tr>
            <th>Email</th>
            <td>".$row["Email"]."</td>
            </tr>

            <tr>
            <th>Date of Birth</th>
            <td>".$row["DOB"]."</td>
            </tr>

            <tr>
            <th>Blood Group</th>
            <td>".$row["Blood_group"]."</td>
            </tr>

            <tr>
            <th>Gender</th>
            <td>".$row["Gender"]."</td>
            </tr>

            <tr>
            <th>City</th>
            <td>".$row["City"]."</td>
            </tr>

            <tr>
            <th>Mobile</th>
            <td>".$row["Mobile"]."</td>
            </tr>

            <tr>
            <th>Password</th>
            <td>".$row["Password"]."<td>
            </tr>";
        }
        echo "</table>";
    }

    $con->close();

    ?>
    </div>
    </div>


    <?php
    $con=mysqli_connect("localhost","root","","bloodbank");
    if(isset($_POST['delete'])){
    
    $name=$var;
    $query="delete from register where Email='".$name."'";
    $sql = mysqli_query($con, $query);
    $con->close();
}
?> 

<?php
$con=new mysqli("localhost","root","","bloodbank");

if(isset($_POST['appoint'])){
    $name=$var;
    $sql="insert into admin(name,email,password) select First_name,Email,Password from register where Email='$var' ";
    $sql = mysqli_query($con, $sql);
    $con->close();
}

?>
</div>
</body>
</html>