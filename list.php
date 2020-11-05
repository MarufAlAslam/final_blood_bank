<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search Blood</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="list.css" />
    <script src="main.js"></script>
</head>
<title>

</title>
<body>
<div class="go_to_home">
    <h2 class="hh3" style="margin:10px; background-color: #99c2ff;color:red;">
    <center>
    Go to&nbsp; <a href="first_page.php">Home</a></h2>
</center>
    </div>
<center>
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <form class="form-inline" role='form' method="post" action="list.php">
                <div style="background-color:black;color:white;width:40%;padding:10px;border:10px solid white;">
                <label class="form-label">Select Blood Group: </label>
                <select name="blood_group" class="form-control" style="width: 50px;">
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
                <br><br>
                <button type="submit" class="btn btn-success" name="searchBtn" style="background-color:green;width:200px;height:50px;font-size:20px;">Check Availability</button>
                </div>
                
                
            </form>
            <br>
            <div class="form-group">
                <table style="border-collapse: collapse;
    width: 100%;
    background: aquamarine;
    font-family: monospace;
    font-size: 20px;
    text-align: left;">
                <tr style="background-color:yellow">
                    <th>Name</th>
                    <th>Gender</th>
                    <th>D.O.B</th>
                    <th>Blood Group</th>
                    <th>City</th>
                    <th>Mobile</th>
                </tr>

                <?php
                if(isset($_POST['searchBtn'])){
                $blood=$_POST['blood_group'];
                $con=mysqli_connect("localhost","root","","bloodbank");
                if($con->connect_error){
                    die("conection failed: ".$con->connect_error);
                }

                $sql="select First_name,Gender,DOB,Blood_group,City,Mobile from register where Blood_group='".$blood."'; ";
                $result=$con->query($sql);

                if($result->num_rows>0){
                    
                    while($row=$result->fetch_assoc()){
                        echo "<tr><td>".$row["First_name"]."</td><td>".$row["Gender"]."</td><td>".$row["DOB"]."</td><td>".$row["Blood_group"]."</td><td>".$row["City"]."</td><td>".$row["Mobile"]."</td><td></tr>";
                    }
                    echo "</table>";
                }

                else{
                    
                    echo "<div style='background-color:black'>";
                    echo "<center>";
                    echo "<label style='color:white;font-size:30px;'>0 Result found</label>";
                    echo "</center>";
                    echo "<div>";
                }
                $con->close();
            }
                ?>
                    
               
              
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

</center>
</div>
</body>
</html>