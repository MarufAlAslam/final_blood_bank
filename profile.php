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
    <link rel="stylesheet" type="text/css" media="screen" href="profile.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="go_to_home">
    <h2 class="hh3" style="margin:10px; background-color: #99c2ff;color:red;">
    <center>

    Go to&nbsp; <a href="user_panel.php">HomePage</a></h2>
</center>

    </div>
    
    <div class="form-group">
    
                <table style="border-collapse: collapse;
    width: 70%;
    background: beige;
    font-family: monospace;
    font-size: 20px;
    text-align: left;
    padding:5px;
    
    margin-left:220px;
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

                else{
                    echo "0 Result found";
                }
                $con->close();
            
                ?>
                    
               
              
            </div>
            <br><br>
<center>
<div style="background-color:black;color:white;"><h2>Update Section</h2></div>
            <div class="update" style="border:5px solid black; width:450px;">
            <form action="#" class="updt" method="post">
            <table style="border-bottom:5px solid black; width:450px;padding:10px;background-color:white;color:black;">

            <tr>
            <th><label> Update First Name</label><th>
            <td><input type="text" name="up_fname"><td>
            <td ><input type="submit" value="Update" name="fnamebtn" style="background-color:green"></td>
            </tr>

            <tr>
            <th><label> Update Last Name</label><th>
            <td><input type="text" name="up_lname"><td>
            <td ><input type="submit" value="Update" name="lnamebtn" style="background-color:green"></td>
            </tr>

            <tr>
            <th><label> Update City</label><th>
            <td><input type="text" name="up_city"><td>
            <td ><input type="submit" value="Update" name="citybtn" style="background-color:green"></td>
            </tr>

            <tr>
            <th><label> Update Mobile</label><th>
            <td><input type="text" name="up_mobile"><td>
            <td><input type="submit" value="Update" name="mobilebtn" style="background-color:green"></td>
            </tr>
</form>
<form action="#" class="updt" method="post">
            </table>
            <table style=";width:450px; padding:10px;background-color:white;color:black;">
            
<tr>
            <th><label>New Password</label><th>
            <td><input type="password" name="pass" style="width:220px;" required><td>
</tr>
            <th><label>Confirm</label><th>
            <td><input type="password" name="re_pass" style="width:220px;" required><td>
            <br>
            </tr> 
            
            </table>
            <td ><input type="submit" value="Update" name="passbtn" style="width:450px;height:30px;background-color:green"></td>
            </form>
            </div>
        </center>  

        <?php
        
        $con=new mysqli("localhost","root","","bloodbank");
        $var=$_SESSION['Email'];

        if(isset($_POST['fnamebtn'])){
            $firstName=$_POST['up_fname'];
            $sql="update register set First_name='".$firstName."' where Email='".$var."'";

            $result=mysqli_query($con,$sql);
        }

        if(isset($_POST['lnamebtn'])){
            $firstName=$_POST['up_lname'];
            $sql="update register set Last_name='".$firstName."' where Email='".$var."'";

            $result=mysqli_query($con,$sql);
        }

        if(isset($_POST['citybtn'])){
            $firstName=$_POST['up_city'];
            $sql="update register set City='".$firstName."' where Email='".$var."'";

            $result=mysqli_query($con,$sql);
        }

        if(isset($_POST['mobilebtn'])){
            $firstName=$_POST['up_mobile'];
            $sql="update register set Mobile='".$firstName."' where Email='".$var."'";

            $result=mysqli_query($con,$sql);
        }

        ?>

<?php
    $servername ="localhost";
	$username ="root";
	$password ="";
	$databasename ="bloodbank";
    $con = new mysqli($servername, $username, $password, $databasename);
    
    $var=$_SESSION['Email'];
    $errors=array();
        
        if(isset($_POST['passbtn'])){
            $password=$_POST['pass'];
            $repassword=$_POST['re_pass'];
            if($password==$repassword){
                $sql="update register set Password='".$password."',Re_password='".$repassword."' where Email='".$var."'";
            $result = mysqli_query($con,$sql);
            
            
            }

            else if($password!="" || $repassword!="") {
                array_push($errors,"The two Passwords not matched");
            }
            else{
                array_push($errors,"Registration Failed");
            }
    }

?>
</body>
</html>