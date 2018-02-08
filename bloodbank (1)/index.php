<?php

if(isset($_POST['login']))
{
	
	$email = $_POST['email'];
	$upass = $_POST['pass'];
	
	// connect to mongodb
  	 $con = new MongoClient();
	 if($con){
		$db = $con->bloodbank; //select Database
		$collection = $db->user;    //	Select Collection
		$qry = array("email" => $email,"pass" => $upass);
		$result = $collection->findOne($qry);
		if($result['email']==$email && $result['pass']==$upass)
		{		
        		echo "<script>alert('Login Sucessfull...!! ');</script>";
			session_start();
			$_SESSION['email'] = $email;
			header("Location: choice.php");
		}
		else
		{
        		echo "<script>alert('Wrong Details');</script>";
		}
	
	}
}
?>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Red</title>

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
  


</head>
<body>

<div id="wrap">

<div id="header">
<h1>Blood Bank Management System</h1>
<h2>Give the Gift of Life</h2>
</div>
<marquee><h3><font color="black">WELCOME TO OUR BLOOD BANK</font></h3></marquee>
<div id="menu">
<ul>
<li><a href="#">Contact Us</a></li>
<li><a href="gallery.php">Gallery</a></li>



</li>
<li><a href="event.php">Upcoming Events</a></li>
<li><a href="bbanks.php">Blood Banks</a></li>
 <li><a href="registration.php">Be a Donor</a></li>
<li><a href="aaa.php">Need Blood</a></li>
 
<li><a href="#">Home</a></li>

</ul>
</div>

<div id="content">
<div class="left"> 

 <h1><font color="black"> DONATION-BOON TO LIFE!</font> </h1><br>
<h3><font color="black">It's time to roll up your sleeve and save a life</h3>
 	 <br /><br />
<img src="images/pics.jpg" alt="Example pic" style="border: 3px solid #ccc;" />
<br /><br />
 <center><font size="6" color="red"><b>WHY DONATE BLOOD?</b></font></center></b>
<br>
	 <center>You dont need a special reason to give blood.You just need your own reason.</center> 
<p><center> Donate blood because you want to help someone in need.Its like you are a boon to someone's life.Every moment someone or the other is in need of blood.   
	 Its medically stated that when you donate blood,yout risk of heart disease reduces and it promotes a healthy life!</center></p>

<font size="5" color ="black">Some Health Benefits</font><br>

You will receive a mini physical to check your:<br>
   1. Pulse<br>
   2.Blood pressure<br>
   3.Body temperature<br>
   4.Haemoglobin<br>

</div>
<br>
<br>
<div class="right">
  <font size="5" color="black">LOGIN</font><br>

<form method="POST" action="index.php">
 Email: <input type="email" name="email" placeholder="email" size="10" required/><br/>
Password: <input type="password" name="pass" placeholder="password" size="10" required/><br/>
<input type="submit" name="login" value="Submit"/>
 
<input type="reset" name="reset" value="Reset"><br/>

</form>
 



<br>
 
<h2><a href="registration.php"><font size="5" color="black">REGISTER</font></a></h2>
(if new user)

</div>
<br>
<br>
<br>

<div style="clear: both;"> </div>

</div>

<div id="bottom"> </div>
<div id="footer">
<b><h1>@2016</b></h1>
</div>

</div>
 

</body>
</html>
