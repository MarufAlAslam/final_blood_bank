<html>
    <body style="background-image:url('icons/0.jpg');background-repeat:no-repeat;background-size:cover;">
    <div class="go_to_home">
    <h2 class="hh3" style="margin:10px; background-color: #99c2ff;color:red;">
    <center>

    Go to&nbsp; <a href="first_page.php">Home</a></h2>
</center>

    </div>
    <br>
<center>
<div style="width:100%;background-color:black;">
    <label style="color:white;font-size:30px;">You Added this Patient to Our List</label>
</div>  
<br>  
<table style="border-collapse: collapse;
    width: 40%;
    background: beige;
    font-family: monospace;
    font-size: 20px;
    text-align: left;
    padding:5px;
    border: 10px solid green;>
<tr style="border:2px solid black;">
<?php
    $conn=new mysqli("localhost","root","","bloodbank");
    $sql="select name,age,gender,bgroup,disease,Phone from add_patient order by id DESC limit 1";
    $result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)){
       // echo "<tr style='background-color:black;color:white;'><td>".$row['name']."</td><td>".$row['age']."</td><td>".$row['gender']."</td><td>".$row['bgroup']."</td><td>".$row['disease']."</td><td>".$row['Phone']."</td></tr>";
       echo 
                        "
                        <center><tr>
                        <th>Name</th>
                        <td>".$row["name"]."</td>
                        </tr></center>

                        <tr>
                        <th>Age</th>
                        <td>".$row["age"]."</td>
                        </tr>

                        <tr>
                        <th>Gender</th>
                        <td>".$row["gender"]."</td>
                        </tr>

                        <tr>
                        <th>Blood Group</th>
                        <td>".$row["bgroup"]."</td>
                        </tr>

                        <tr>
                        <th>Disease</th>
                        <td>".$row["disease"]."</td>
                        </tr>

                        <tr>
                        <th>Phone</th>
                        <td>".$row["Phone"]."</td>
                        </tr>

                        "; 
    }
    
}
    ?>
    </tr>
</table>
<br>
<div style="width:100%;background-color:black;">
    <marquee behaviour="scroll" scrollamount="10" direction="left"><label style="color:white;font-size:30px;">We recive your data..We will reach you as soon as posible.Please keep calm and Pray.............</label>
</marquee>
</div> 
</center>
</body>
<html>