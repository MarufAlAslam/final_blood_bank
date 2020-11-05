

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="user_inbox.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="go_to_home">
    <h2 class="hh3" style="margin:10px; background-color: #99c2ff;color:red;">
    
   <center>
    Go to&nbsp; <a href="inbox.php">Message</a></h2>
    
</center>

</div>
<center>


</form>
<br>

</center>
    </div><div class="form-group">
                <table style="border-collapse: collapse;
    width: 100%;
    background: beige;
    font-family: monospace;
    font-size: 20px;
    text-align: left;">
                <tr style="background-color:yellow">
                    <th>id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    
                    <th>sender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th>Message</th>
                </tr>
<center>
                <?php
                session_start();
                $con=mysqli_connect("localhost","root","","bloodbank");
                if($con->connect_error){
                    die("conection failed: ".$con->connect_error);
                }
                $var = $_SESSION['Email'];
                $sql="select id,sender,message from inbox where email='".$var."'";
                $result=$con->query($sql);

                if($result->num_rows>0){
                    
                    while($row=$result->fetch_assoc()){
                      
                        if($row["sender"]=='ADMIN')
                        {
                            echo '<tr style= "background:black;color:white;border:3px solid red"><td>'.$row["id"].'</td><td>'.$row["sender"].'</td><td>'.$row["message"].'</td><td></tr>';
                        }
                        else
                        {
                            echo '<tr style= "background:white;color:black;border:3px solid green"><td>'.$row["id"].'</td><td>'.$row["sender"].'</td><td>'.$row["message"].'</td><td></tr>';
                        }
                    }
                    echo "</table>";
                }

                else{
                    echo "<h2>You have no MESSAGES yet</h2>";
                }
                $con->close();
            
                ?>
                    
               
        </center>
            </div>




</body>
</html>