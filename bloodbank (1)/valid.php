<?php

if(isset($_POST['login']))
{
	 
	$age = $_POST['age'];
	$weight = $_POST['weight'];
	$ld=$_POST['ld'];
	$error=array();
	$v="Within 3 months";
 $v1=strcmp($ld,$v);
 	if($age>18 && $age<60 && $weight>50 && $v1!=0)
      {
	 
           echo "<script >alert('You are eligible to donate blood!Please register!');
				 window.location.href='registration1.php';
				</script>";
	}
	else
       {
	echo "<script >alert('You are not eligible to donate blood!');
				 window.location.href='index1.php';
				</script>";
	}


	
}
	 
 
	


?>









<!DOCTYPE html>
<html>
<head>
 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3/w3.css">
<link rel="stylesheet" href="w3/w3-white-black.css">
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
<body bgcolor="white" > 
 
<style>
fieldset{
  width: 800px;

}
/*#f{*/
/*background: url('images/regis(4).jpg')*/
/*no-repeat top left;*/
/*size:100% 100%;*/
/*} */


      
label
{
display: inline-block;
float:left;
clear:left;
width:100px;
text-align:left;
}
 
</style>
<br>

  
 </div>


<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="index1.php" class="w3-red"><i class="fa fa-home w3-margin-right"></i>HOME</a></li>
   
 
    </div>
<br/>

<div

<div id="f">

	<header>
		<h2 style="font-family:times,serif;font-style:italic"><center><marquee><font color="red">"A life may depend on a gesture from you, a bottle of Blood"</marquee></center></h2>
	</header>
	<div class="margin2" style="margin-left: 290px;padding-left:200px;padding-top:20px;padding-bottom:30px;margin-right:290px;border: 1px solid #000000">
<h2>ELIGIBILITY FORM</h2>


 
<form method="POST" action="valid.php">
<fieldset>
    
 
<label>	Age: </label>
	<input type="text" name="age" placeholder="Age" align="right" required>
	<br/>
	<br/>
<label>	Weight: </label>
	<input type="text" name="weight" placeholder="weight" align="right" required>
	<br/>
	<br/>
 <label>	Last Donated: </label>
	 
<select name="ld" required>
	<option name="invalid" >Within 3 months</option>
	<option name="valid" >Before 3 months</option>
	<option name="valid" >Before 6 months</option>
	<option name="valid" >Before 9 months</option>
	<option name="valid" >Before a year</option>

	</select>
	<br/>
	<br/>
 
	</fieldset>
  
 

<input type="submit" name="login" value="Submit" class="w3-btn w3-green"> </input>
<input type="reset" name="reset" value="Reset" class="w3-btn w3-green"> </input><br>

</div>
</div>

</form>


</div>

 </div>

</body>
</html>
