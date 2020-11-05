<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Our Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="gallery.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="go_to_home">
                    <h2 class="hh3" style="margin:10px; background-color: #99c2ff;">
                   <center>
                
                    Go to&nbsp; <a href="first_page.php">Home</a></h2>
</center>
                
                    </div>

</body>
</html>
<?php

//require '4-fetch.php';
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
        
        echo '<img class = "imgg" src="data:imaeg;base64,'.$img.'">';
        echo '&nbsp;';
        
    }
}
echo '</center>';
?>