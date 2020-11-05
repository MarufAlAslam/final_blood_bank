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
    <title>Add image</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="upload.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="go_to_home">
    <h2 class="hh3" style="margin:10px; background-color: #99c2ff;color:red;">
    <center>

    Go to&nbsp; <a href="admin_panel.php">Homepage</a></h2>
</center>

    </div>
    <center>
    <form method="post" class="fom1" enctype="multipart/form-data" style="background-color: aquamarine;width:60%;border:5px solid black;padding:5px;">
<input type="file" name="image" style="font-size:20px;color:red;margin-left:55px;" required>
<br>
<input type="submit" name="submit" value="submit" style="font-size:20px;background-color:green;">
</form >

    <br><br>

<?php
if(isset($_POST['submit'])){
    if(getimagesize($_FILES['image']['tmp_name'])==FALSE){
        echo "Failed";
    }
    else{
        $name=addslashes($_FILES['image']['name']);
        $image=base64_encode(file_get_contents(addslashes($_FILES['image']['name'])));
        saveimage($name,$image);
    }
}

function saveimage($name,$image){
$con = new mysqli("localhost","root","","bloodbank");
$sql="insert into upload(name,data) values('$name','$image')";

$query=mysqli_query($con,$sql);

if($query){
    
}
else{
    
}
}
display();
echo '<center>';
function display(){
    $con = new mysqli("localhost","root","","bloodbank");
    $sql="select * from upload";
    $query=mysqli_query($con,$sql);

    $num=mysqli_num_rows($query);
    for($i=0;$i<$num;$i++){
        $result=mysqli_fetch_array($query);
        $img = $result['data'];
        
        echo '<img class = "img" src="data:imaeg;base64,'.$img.'">';
        echo '&nbsp;';
        
    }
}
echo '</center>';
?>




</body>
</html>