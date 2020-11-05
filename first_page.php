<?php
session_start();
  $host ="localhost";
	$user ="root";
	$password ="";
	$database ="bloodbank";
	$con = new mysqli($host, $user, $password, $database);
        
        if(isset($_POST['submitbtn'])){
            $pname=$_POST['name'];
            $page=$_POST['age'];
            $pgenger=$_POST['gender'];
            $pblood=$_POST['group'];
            $pdisease=$_POST['disease'];
            $pdate=$_POST['date'];
            $pphone=$_POST['phone'];
           // $pmessage=$_POST['message'];
            
            $query="insert into add_patient(name,age,gender,bgroup,disease,date,phone) values ('$pname','$page','$pgenger','$pblood','$pdisease','$pdate','$pphone')";
            $sql = mysqli_query($con, $query);
            if($query){
              
            }
            header('Location: add_patient.php');
            exit;
    }


?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Smart Blood Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="first.css" />
</head>
<body>
        
<div style="background-image:url('icons/3.png');height:150px; background-repeat: no-repeat;background-size:cover;background-position:center;">
  <center>
    <div style="opacity:1">
<label style="background-color:white;color:red;font-size:50px;font-family: 'Courier New', Courier, monospace;"><b>Smart Blood Bank</b></label><br>
<label style="background-color:white;font-size:25px;font-family: 'Courier New', Courier, monospace;">Donate Blood,Save Life</label>
<div>
  </center>
  </div>
    
    <div class="navigation">
        <a href="register.php" style="text-decoration: none;"><i style="font-size:25px;">Register</i></a>
        &nbsp;
        <div class="dropdown">
                <a href="#" style="text-decoration: none"><i style="font-size:25px;">Login</i></a>
                <div class="dropdown-content" style="border-radius: 10px;">
                  <a href="user_login.php">User</a>
                  <a href="admin_login.php">Admin</a>
                </div>
                &nbsp;
                </div>
                <a href="list.php" style="text-decoration: none"><i style="font-size:25px;">Availability</i></a>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;

                <a href="gallery.php" style="text-decoration: none"><i style="font-size:25px;">Gallery</i></a>
              
    </div>
    <div style="background-color:black;width:100%;height:60px;">
    <br>
    <label style="color:white;font-size:20px;">NEWS:</label>
    <marquee behavior:"scroll" direction="left" scrollamount="8" onMouseOver="this.stop()" onMouseOut="this.start()"  ><Label style="font-size: 30px;color:white;font-family: 'Trebuchet MS'; color:yellow;">
     <?php
    $conn=new mysqli("localhost","root","","bloodbank");
    $sql="select * from news order by id DESC limit 1";
    $result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)){
        echo $row['news'];
    }
}

    ?>
    </label></marquee></div>
    
    <br>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slide_back{
  background-image:url("background.png");
  background-attachment:fixed;
  height:580px;
}
.slideshow-container {
  padding:20px;
  max-width: 1000px;
  position: relative;
  height: 550px;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<body>
<div class="slide_back">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="icons/0.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="icons/1.png" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="icons/2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="icons/3.png" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <img src="icons/4.jfif" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="icons/5.jpg" style="width:100%">
</div>

</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

    
    <div class ="read">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            
            

            
        <div class="a2">
                    <h2 class="blinking" style="text-align: center;">Emergency request for Blood</h2>
                    <hr>
                    <img src="BANNER1.jpg" alt="donate" style="align-content: center; width: 100%; height: 300px; margin-top: 10px;border-radius: 50px;">
<br><br><br>
<div style="background:black">
<label style="font-size:25px;color:red;">Request for emergency blood to save a life.We try Our best to reach you as soon as possible</label>
</div>                   
<br><br><br><br><form action="first_page.php" method="POST" class="form1">
        
                            <label>Patient Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" name="name" style="height: 37px; width: 50%" >
                            <br>
                            <br>
                            <label>Patient Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" name="age"style="height: 37px; width: 50%"required>
                            <br>
                            <br>
                            <label>Patient Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" list="gender" name="gender"style="height: 37px; width: 50%"required>
                            <datalist id="gender">
                                <option value="MALE">MALE</option>
                                <option value="FEMALE">FEMALE</option>
                            </datalist>
                            <br>
                            <br>
                            <label>Blood Group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text"list= "bg" name="group"style="height: 37px; width: 50%"required>
                            <datalist id="bg">
                                <option >A+</option>
                                <option >A-</option>
                                <option >B+</option>
                                <option >B-</option>
                                <option >O+</option>
                                <option >O-</option>
                                <option >AB+</option>
                                <option >AB-</option>
                            </datalist>
                            <br>
                            <br>
                            <label>Petient Disease&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" name="disease"style="height: 37px; width: 50%"required>
                            <br>
                            <br>
                            <label>Required Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="date" name="date"style="height: 37px; width: 50%"required>
                            <br>
                            <br>
                            <label>Phone Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" name="phone"style="height: 37px; width: 50%"required>
                            <br><br>
                            
                            <input class="sbmtbtn" type="submit" value="Request" name="submitbtn" style="border-radius:15px;font-size:20px;">
                            
                        </form>
                        
                       
                </div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="a1">
            <h2 class="blinking" style="text-align: center;">Importance of Donating Blood</h2>
            <hr>
            <img src="donate.png" alt="donate" style="align-content: center; width: 100%; height: 300px; margin-top: 10px;border-radius: 50px;">
                <p class="donate" style="padding: 10px;font-size:20px;">According to the American Red Cross, while approximately 38 percent of the U.S. population is eligible to donate blood, only about 10 percent of those who are eligible actually donate. The demand for donated blood in our nation’s hospitals, however, is consistently high. In fact, it is estimated that roughly 40,000 pints of this life-saving blood are used every single day, and the demand never stops.

                        Also, the Red Cross is currently reporting that there are national shortages of donated blood due to the severe winter weather throughout the country, which has made it difficult for people to get to donation centers. And with January being National Blood Donor Month, it is an ideal time to educate the public about the need for blood donations.Clearly, the current short supply is a primary reason to donate blood, but the need is always present. For many people, the reason they donate blood is simply that they feel it is the right thing to do. After all, about one of every seven people who go to a hospital end up needing donated blood as part of their treatment. And there is no such thing as synthetic blood. In other words, it can’t be manufactured so donations are the only way to keep the supply fully stocked.

                                Donated blood is used for a wide range of circumstances that can potentially affect anyone, which is also a main reason people donate.                            
                                </p>
                    
               
        </div>

        
    </div>
    <br><br>
<div class="question">
<div class="faqdiv">
<label style="font-size:30px;color:white">Have a Question?Ask Now</label>
</div>
    <div class="faq">
    <form action="faq.php" method="post" class ="form2" style="padding:10px;">
    <center><input type="text" name="qname" class="qname" placeholder="Your Name" style="width:90%;background-color:black;color:white" required></center>
    <center><input type="text" name="qmail" class="qmail" placeholder="your email" style="width:90%;background-color:black;color:white" required></center>
    <center><input type="text" name="question" class="faqq" placeholder="Your Question" style="width:90%;background-color:black;color:white" required></center>
    <center><input type="submit" value="submit" class="submit" name="submit_faq"></center>  
    </form>
    </div>
    </div>
    
    <div class="about">
      <br>
<center>
    <label style="background-color:black;color:white;font-size:30px;">About US</label>
</center>

<div style="display:inline-flex;width:100%;height:400px;
background-image:url('icons/faqs.png');background-repeat:no-repeat;
background-position:center;
background-attachment-fixed;">

<div style="background-color:rgb(135, 180, 130);width:40%;border:3px red solid;">
<center><h2>Developed By:</h2>
<br>
<br>
<br>

    <label>MD. Maruf Al Aslam</label><br>
    <label>Faculty of Computer Science and Engineering.</label><br>
    <label>Patuakhali Science and Technology University.</label><br>
    <br><br>
    <a href="https://www.facebook.com/marufalaslam"><button  
    style="border-radius:20px; 
    width:45px;
    height:45px;
    background-image:url('icons/32.png');
    background-size:cover;
    background-repeat:no-repeat;
    background-position:absolute">
    </button></a>

    <a href="https://www.instagram.com/maruf_al_aslsm/"><button  
    style="border-radius:20px; 
    width:45px;
    height:45px;
    background-image:url('icons/iconfinder_Instagram_1298747.png');
    background-size:cover;
    background-repeat:no-repeat;
    background-position:absolute">
    </button></a>

    <a href="https://www.linkedin.com/in/al-aslam-maruf-62a5a6153/"><button  
    style="border-radius:20px; 
    width:45px;
    height:45px;
    background-image:url('icons/iconfinder_linkedin_834713.png');
    background-size:cover;
    background-repeat:no-repeat;
    background-position:absolute">
    </button></a>


    <a href="https://twitter.com/Maruf_Al_Aslam"><button  
    style="border-radius:20px; 
    width:40px;
    height:40px;
    background-image:url('icons/iconfinder_twitter_circle_294709.png');
    background-size:cover;
    background-repeat:no-repeat;
    background-position:absolute">
    </button></a>
    <br>
    <br><br><br><br><br>
    <label>copyright @2019</label><br>
    <label>all rights reserved.</label>
</center>
</div>
&nbsp;
<div style="background-image:url('icons/faqs.png');background-repeat:no-repeat;background-position:center;width:30%;border:3px blue solid;margin-right;1px;">
<center>
<h3>
    <br><br><br><br><br><br><div style="color:white;">
    We want to help those people who are badly needed Blood to save one valueable LIFE. <br> Join with us to help Peoples.
    <br><br>
    Happy Donating.
    <div>
</h3>

</center>

</div>
&nbsp;
<div style="background-color:red;width:40%;height:400px;border:3px yellow solid;">
<center><h2>Find us on Google Map</h2>
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12750.358943077754!2d90.3842538!3d22.464453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30aacf2fe39e501f%3A0xec70c954a51b0386!2z4Kaq4Kaf4KeB4Kav4Ka84Ka-4KaW4Ka-4Kay4KeAIOCmrOCmv-CmnOCnjeCmnuCmvuCmqCDgppMg4Kaq4KeN4Kaw4Kav4KeB4KaV4KeN4Kak4Ka_IOCmrOCmv-CmtuCnjeCmrOCmrOCmv-CmpuCnjeCmr-CmvuCmsuCmr-CmvA!5e1!3m2!1sbn!2sbd!4v1547996329368" style="height:320px;width:90%"></iframe>

    </div>
</center>
</div>
</div>
    </div>
</body>
</html>