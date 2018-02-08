<?php

if(isset($_POST['login']))
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$bloodgrp=$_POST['b_grp'];
	$error=array();

	/*$mob="/^[1-9][0-9]*$/";
	
	if(empty($firstname)){
              $error[] = "Please enter firstname";}
	if(empty($lastname)){
              $error[] = "Please enter lastname";}
	if(empty($age)){
              $error[] = "Please enter age";}

	 if(empty($address)){
              $error[] = "Please enter address";
            }
	if(empty($email)){
              $error[] = "Please enter email";}
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{$error[]="Inavlid email format!";}
   
	if(empty($mobile)){
              $error[] = "Please enter mobile";}
	if(!preg_match($mob,$mobile))
{
$error="Please enter a valid mobile number!";}
	if(empty($uname)){
              $error[] = "Please enter uname";}
	if(empty($pass )){
              $error[] = "Please enter password";}
            if(empty($pass1)){
              $error[] = "Please Confirm password";
            }
            if($pass != $pass1){
               $error[] = "Password and0 Confirm password are not the same!Re-enter";
            }
            */
	
	// connect to mongodb



   $con = new MongoClient();

//==========================
	if($con)
	{
 
		//connecting to database
		$databse=$con->bloodbank;
		//echo "Database 'mydb' selected";
		
		//connect to specific collection
		$collection=$databse->user;
		//echo "Collection user Selected succsessfully";
 
		$query=array('email'=>$email);
		//checking for existing user
		$count=$collection->findOne($query);
 		
		
		if(!count($count))
		{
                      
		 
               if($age>18 && $age<60)
           
			
			{//Save the New user
			$user_data=array('firstname'=>$firstname,'lastname'=>$lastname,'age'=>$age,'gender'=>$gender,'address'=>$address,'email'=>$email,'mobile'=>$mobile,'b_grp'=>$bloodgrp);
			$collection->save($user_data);
			echo "<script >
				alert('Successfully Registered!');
				 window.location.href='index1.php';
				</script>";
			
			session_start();
			$_SESSION['email'] = $email;
			$_SESSION['firstname']=$firstname; 
}
else
{
echo "<script>alert('Not Eligible to donate blood!');
				 window.location.href='index1.php';</script>";
}

 }



		else
		{
			echo "Email is already existed.Please register with another Email id!.";
			?>
        <script>alert('error while registering you...');</script>
        <?php
		}
 
	}else
	{
 
		die("Database are not connected");
	}

//========
	

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
<h2>REGISTRATION FORM</h2>


<p>If you wish to be a registered donor of our bloodbank,please register!</p>
<form method="POST" action="registration.php">
<fieldset>
   <h3>Personal Information:</h3>
<hr style="width: 290px">

<label for="Name"> First Name:</label>
     <input type="text" name="firstname" placeholder="firstname" align="right"  required>
    <br/>
	<br/>
<label>	Last Name: </label>
	<input type="text" name="lastname" placeholder="lastname" align="right"  required>
	<br/>
	<br/>
<label>	Age: </label>
	<input type="text" name="age" placeholder="Age" align="right" required>
	<br/>
	<br/>
<label>	Blood-group: </label>
	 
<select name="b_grp" required>
	<option name="b_grp" >A+</option>
	<option  name="b_grp">A-</option>
	<option  name="b_grp">B+</option>
	<option  name="b_grp">B-</option>
	<option  name="b_grp">AB+</option>
	<option  name="b_grp">AB-</option>
	<option  name="b_grp">O+</option>
	<option  name="b_grp">O-</option>
	</select>
	<br/>
	<br/>
<label>	Gender: </label>
	<select name="gender" required>
	<option name="gender" value="Male">Male</option>
	<option  name="gender" value="Female">Female</option>
	</select>
	<br/>
	<br/>
	<br/>
	</fieldset>
  <fieldset>

  <h3>Contact Details</h3>
		  <hr style="width: 290px">
  <label>Address:</label>
  <input type="textarea" name="address" placeholder="Address" required>
	  <br/>
	  <br/>
  <label>E-mail:</label>
  <input type="email" name="email" placeholder="Email-id" required>
	  <br/>
	  <br/>
  <label>Mobile.No:</label>
  <input type="text" name="mobile"  required>
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
