<!DOCTYPE html>
<html>
<title> 
</title>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3/w3.css">
<link rel="stylesheet" href="w3/w3-theme-black.css">
 <link rel="stylesheet" href="w3/font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome-animation.css">
    <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">-->

    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <link href="Roboto_Condensed/RobotoCondensed-Light.ttf">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">


    <link rel="stylesheet" type="text/css" href="css/main.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #map {
            height: 100%;
        }
 
    </style>
</head>
<body id="myPage">

 

<!-- Side Navigation on click -->
<nav class="w3-sidenav w3-white w3-card-2 w3-animate-left" style="display:none;z-index:2" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-xxxlarge w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
<a href="aaa.php">Need Blood</a> 
 <a href="valid1.php">Be a Donor</a>
 <a href="event.php">Upcoming Events</a> 
 
 <a href="gallery.php">Gallery</a> 
  
 

</nav>

<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="index1.php" class="w3-white"><i class="fa fa-home w3-margin-right"></i>HOME</a></li>
  <li class="w3-hide-small" ><a href="aaa.php"  class="w3-hover-white">Need Blood</a></li>
 <li class="w3-hide-small"><a href="event.php" class="w3-hover-white">Upcoming events</a></li>
 
  <li class="w3-hide-small w3-dropdown-hover">
    <a href="#" title="Notifications">Be a Donor <i class="fa fa-caret-down"></i></a>     
    <div class="w3-dropdown-content w3-white w3-card-4">
      <a href="valid1.php">REGISTER</a>
      <a href="event.php">EVENTS</a>
 
    </div>
<li class="w3-hide-small"><a href="gallery.php" class="w3-hover-white">Gallery</a></li>
  </li>
 
  
 
  <li style="float:right" class="w3-hide-small"> 
 <button onclick="document.getElementById('id02').style.display='block'" class="w3-btn w3-black w3-large w3-text-blue"><i class="fa fa-user">Login</button></i></li> 
 </ul>
 
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:43px;">
  <ul class="w3-navbar w3-left-align w3-large w3-theme">
   <li><a href="index1.php" class="w3-white"><i class="fa fa-home w3-margin-right"></i>HOME</a></li>
  <li class="w3-hide-small"><a href="aaa.php" class="w3-hover-white">Need Blood</a></li>
 <li class="w3-hide-small"><a href="event.php" class="w3-hover-white">Upcoming events</a></li>
 
    <li class="w3-dropdown-hover">
    
    <a href="#" title="Notifications">Be a Donor <i class="fa fa-caret-down"></i></a>     
    <div class="w3-dropdown-content w3-white w3-card-4">
      <a href="valid1.php">REGISTER</a>
      <a href="event.php">EVENTS</a>
 
    </div>
<li class="w3-hide-small"><a href="gallery.php" class="w3-hover-white">Gallery</a></li>
  </li>
<li class="w3-hide-small"> <i class="fa fa-user" aria-hidden="true"></i> </i> </li>
  
 <li class="w3-hide-small"> 
<button onclick="document.getElementById('id02').style.display='block'" class="w3-btn w3-black w3-large"><i class="fa fa-user">Login</button></i></li>
 
  </ul>
</div>

<!--hdsgyusgdhj-->
<div class="w3-container">
  
  

  <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
         
      </div>

      <form class="w3-container"   method="POST">
        <div class="w3-section">
          <label><b>Email</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="email" name="email" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="password" name="pass" required><br/>
          <input type="submit" name="login" value="Submit" class="w3-btn w3-green"> </input>
<input type="reset" name="reset" value="Reset" class="w3-btn w3-blue"> </input><br>
        </div>
      </form>

    </div>
  </div>
</div>





<!--hdsgyusgdhj-->





<div class="w3-display-container w3-animate-opacity">
  <img class="testimg" src="images/bb.jpg"   style="width:100%;min-height:350px;max-height:600px;margin-top:40px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-xlarge w3-theme w3-hover-white" title="Go To BLOODBANK"> BLOOD BANK</button>
  </div>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-top">
      <header class="w3-container w3-black"> 
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn"><i class="fa fa-remove"></i></span>
        <h4>WELCOME!!!</h4>
        <h5>GIVE THE GIFT OF LIFE! <i class="fa fa-smile-o"></i></h5>
      </header>
      <div class="w3-container">
        <p> You dont need a special reason to give blood.You just need your own reason</p>
         
      </div>
      <footer class="w3-container w3-black">
        <p> Come Join Us!</p>
      </footer>
    </div>
</div>

 
<!-- Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l5">

<div class="w3-col w3-white w3-container" style="width:60%;padding-bottom: 3px">
<h1 style="color:red;" class="text-center"> DONATION-BOON TO LIFE!</h1>
<h2 class="text-center">BEAT THE MYTH</h2>

<p style="font-size: 16px;padding-top: 20px;line-height: 25px;">
             Donating blood is safe and simple. It takes approximately 10-15 minutes to complete the blood donation process. Any healthy adult between 18 years and 60 years of age can donate blood. This is what you can expect when you are ready to donate blood:

    You walk into a reputed and safe blood donation centre or a mobile camp organized by a reputed institution.
    A few questions will be asked to determine your health status (general questions on health, donation history etc). Usually you will be asked to fill out a short form.
    Then a quick physical check will be done to check temperature, blood pressure, pulse and hemoglobin content in blood to ensure you are a healthy donor.
    If found fit to donate, then you will be asked to lie down on a resting chair or a bed. Your arm will be thoroughly cleaned. Then using sterile equipments blood will be collected in a special plastic bag. Approximately 350 ml of blood will be collected in one donation. Those who weigh more than 60 Kg can donate 450 ml of blood.
    Then you must rest and relax for a few minutes with a light snack and something refreshing to drink. Some snacks and juice will be provided.
    Blood will be separated into components within eight hours of donation
    The blood will then be taken to the laboratory for testing.
    Once found safe, it will be kept in special storage and released when required.
    The blood is now ready to be taken to the hospital, to save lives.


</p>
</div>

 
<div class="w3-col w3-container" style="width:40%">
<div class="w3-card-2 w3-white">
  <img src="images/pics.jpg"   style="width:100%">
  <div class="w3-container">
 
   
  </div>
  </div>
</div>

 
</div>

 
<!-- Container -->
<section id="team" style="background-color: #673ab7">
    <div class="container text-center" style="padding-top: 21px;padding-bottom: 70px;">
        <div class="row text-center">
            <h2 class="text-center" style="color: white">OUR TEAM</h2>
            <!--team member1-->
            <div class="col-md-4">
                <div class="team">
                    <img src="images/so.jpg" class="img-responsive img-circle wow bounceInRight" style="border-radius: 50%;margin-top: 10px;"/>
                </div>
                <h4 style="color: white;padding-top: 15px">Sonali Lohakare</h4>
                <h4 style="color: white;padding-top: 5px">Roll No : 3023</h4>
            </div>
            <!--team member2-->
            <div class="col-md-4">
                <div class="team">
                    <img src="images/s3.jpg" class="img-responsive img-circle wow bounceInRight" data-wow-duration="1.5s" style="border-radius: 50%;margin-top: 10px;"/>
                </div>
                <h4 style="color:white;padding-top: 15px">Shravani Majali</h4>
                <h4 style="color: white;padding-top: 5px">Roll No : 3024</h4>
            </div>
            <!--team member3-->
            <div class="col-md-4">
                <div class="team">
                    <img src="images/m1.jpg" class="img-responsive img-circle wow bounceInRight" data-wow-duration="2s" style="border-radius: 50%;margin-top: 10px;"/>
                </div>
                <h4 style="color:white;padding-top: 15px">Monika Kuyate</h4>
                <h4 style="color: white;padding-top: 5px">Roll No : 3029</h4>
            </div>
        </div>
    </div>
</section>





<!-- Container -->
<div class="w3-container w3-padding-64  w3-theme-l5">

    
    <div class="row text-center">
        <h2 class="text-center">Contact US </h2>
    </div>


<div class="w3-row"><br>

<div class="w3-col w3-white w3-container" style="width:33%">
 
      <h3>Sonali Lohakare</h3>
      <p> </p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;Pict,Pune</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;9762438749</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;sonalilohakare@gmail.com</p>
</div>

<div class="w3-col w3-white w3-container" style="width:33%">
 
      <h3>Shravani Majali</h3>
      <p> </p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;Bibwewadi,Pune</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;9561647284</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;shramaj4@gmail.com</p>
</div>

<div class="w3-col w3-white w3-container" style="width:33%">
 
      <h3>Monika Kuyate</h3>
      <p> </p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;Katraj,Pune</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;7721985974</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;kuyatem@gmail.com</p>
</div>


 
</div>



       
    
    </div>
  </div>
</div>

<!-- Google Maps -->
<div id="map"></div>

<script>

    // The following example creates a marker in Stockholm, Sweden using a DROP
    // animation. Clicking on the marker will toggle the animation between a BOUNCE
    // animation and no animation.

    var marker;

    function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,

            center: {lat: 18.4575, lng: 73.8515}
        });


        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.BOUNCE,
            position: {lat: 18.45852, lng: 73.85106}
        });
        marker.addListener('click', toggleBounce);
    }

    function toggleBounce() {
        if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDq77jYmZGbm6hxcofamgkDQmtGEb8VjTs&callback=initMap">
</script>

<!-- Footer -->
<section id="footer">
    <div class="container-fluid text-center" style="background-color: #000;border-bottom: 1px solid white;">
        <div class="row text-center" style="margin-top: 40px;margin-bottom: 30px;">
            <!--address starts-->
            <div class="col xs-12 col-md-4 text-center">
                <h4 style="color: #ffffff;margin-left: 20px;">
                    C-Building, Third Floor, IT Department,<br>
                    Pune Institute Of Computer Technology,<br>
                    Dhankawadi, Pune, Maharashtra,<br>
                    India, 411043 .
                </h4>
            </div>
            <!--icons starts-->
            <div class="col-xs-12 col-md-4 text-center" id="font1">
                <h3 class="text-center" style="color: white;border-radius: 30px;border: 2px solid #ffb300;width: 160px;margin: auto;margin-top: 10px !important;margin-bottom: 45px !important;padding: 3px 10px 3px 10px;">   FOLLOW US   </h3>
                <i class="fa fa-facebook fa-2x social faa-tada animated-hover" style="border-radius: 50%;border: 2px solid #ffb300;padding: 7px 10px 7px 10px;width: 45px;height: 45px;"></i>
                <i class="fa fa-twitter fa-2x social faa-tada animated-hover" style="border-radius: 50%;border: 2px solid #ffb300;padding: 7px 10px 7px 10px;width: 45px;height: 45px;"></i>
                <i class="fa fa-google-plus fa-2x social faa-tada animated-hover" style="border-radius: 50%;border: 2px solid #ffb300;padding: 7px 10px 7px 10px;width: 45px;height: 45px;"></i>
                <i class="fa fa-linkedin fa-2x social faa-tada animated-hover" style="border-radius: 50%;border: 2px solid #ffb300;padding: 7px 10px 7px 10px;width: 45px;height: 45px;"></i>
            </div>
            <div class="col xs-12 col-md-4 text-center">
                <h4 style="color: #ffffff;margin-left: 20px;">
                    An important component of many medical and<br>
                    surgical treatments is the highly specialized<br>
                    blood products collected by Central Blood Bank.<br>
                    A stable blood supply is vital at all times to<br>
                    ensure excellence in the delivery of healthcare<br>
                    in our region.
                </h4>
            </div>
        </div>
</section>
<!--footer ends-->

<div class="container-fluid" style="background-color: #000;">
    <div class="text-center">
        <h5 class="text-center" style="color: white;">  @2016 Mini Project.</h5>
    </div>
</div>
</div>

<!-- Script For Side Navigation -->
<script>
function w3_open() {
    var x = document.getElementById("mySidenav");
    x.style.width = "300px";
    x.style.textAlign = "center";
    x.style.fontSize = "40px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script rel="script" type="text/javascript" src="js/jquery-2.2.1.min.js"></script>
<script rel="script" type="text/javascript" src="js/wow.min.js"></script>
<script rel="script" type="text/javascript" src="js/bootstrap.js"></script>
<script rel="script" type="text/javascript" src="css/script.js"></script>
</body>
</html>
































<?php

if(isset($_POST['login']))
{
	
	$email = $_POST['email'];
	$upass = $_POST['pass'];
	$email1='admin@gmail.com';
	$upass1='admin';
	 
		if($email==$email1 &&  $upass==$upass1)
		{		
        		echo "<script>alert('Admin welcome! ');
				window.location.href='admin1.php';</script>";
			session_start();
			$_SESSION['email'] = $email;
			 
		}
		else
		{
        		echo "<script>alert('YOU ARENT THE ADMIN!');
				window.location.href='index1.php';</script>";
		}
	
	
}
?>
