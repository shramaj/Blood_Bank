<?php
session_start();

if(isset($_SESSION['email']))
{
 
 
 

}
else{ 
header('Location: index1.php');
}
 
?> 



<html>
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
</head>
<style>
 
#search
{
width:20em;
height:3em;
} 
#b
{
background:url(images/bb.jpg);
background-repeat:no-repeat;
padding:10px;
}
#btn
{
position:relative;
margin-left:90%;
}
</style>

<body >

<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
   
  <li class="w3-hide-small"><a href="user.php" class="w3-hover-white">REGISTERED USERS</a></li>
 <li class="w3-hide-small"><a href="bloodunits.php" class="w3-hover-white">BLOOD UNITS</a></li>
 <li class="w3-hide-small"><a href="upcoming.php" class="w3-hover-white">UPCOMING EVENTS</a></li>
  <li class="w3-hide-small w3-dropdown-hover">
    
<li class="w3-hide-small"><a href="org.php" class="w3-hover-white">ORGANISED EVENTS</a></li>
  </li>
 
  
 </ul>
 
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:43px;">
  <ul class="w3-navbar w3-left-align w3-large w3-theme">
 
  <li class="w3-hide-small"><a href="user.php" class="w3-hover-white">REGISTERED USERS</a></li>
 <li class="w3-hide-small"><a href="bloodunits.php" class="w3-hover-white">BLOOD UNITS</a></li>
 <li class="w3-hide-small"><a href="upcoming.php" class="w3-hover-white">UPCOMING EVENTS</a></li>
 <li class="w3-hide-small"><a href="org.php" class="w3-hover-white">ORGANISED EVENTS</a></li>
  </li>
<li class="w3-hide-small"> <i class="fa fa-user" aria-hidden="true"></i> </i> </li>
  
  
 
  </ul>
</div>

 <div class="w3-display-container w3-animate-opacity">
  <img class="testimg" src="images/bb.jpg"   style="width:100%;min-height:350px;max-height:600px;margin-top:40px;">
 
     
  </div>
</div>
 <br/>
  
<footer>
<div id="btn">
 
<a href = "logout.php" class = "btn btn-info"   role = "button">LOGOUT</a>&nbsp&nbsp&nbsp&nbsp&nbsp
</div>
<br/>

</footer>
</body>
 
</html>

