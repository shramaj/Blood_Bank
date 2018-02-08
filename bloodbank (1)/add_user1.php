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
                      
		 
               
           
			
			//Save the New user
			$user_data=array('firstname'=>$firstname,'lastname'=>$lastname,'age'=>$age,'gender'=>$gender,'address'=>$address,'email'=>$email,'mobile'=>$mobile,'b_grp'=>$bloodgrp);
			$collection->save($user_data);
			echo "<script >
				alert('Successfully Registered!');
				 window.location.href='index.php';
				</script>";
			 
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
<link rel="stylesheet" type="text/css" href="style1.css" media="screen" /></head>
<body bgcolor="white" > 
<div id="headerr">
<br>
 <h1>REGISTRATION FORM</h1>
 
</div>
<style>
fieldset{
  width: 800px;

}
form  {
background: url('images/regis(4).jpg')
no-repeat top left;
size:100% 100%;
} 


      
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
<header>
<h2 style="font-family:times,serif;font-style:italic"><center><marquee><font color="red">"A life may depend on a gesture from you, a bottle of Blood"</marquee></center></h2>
</header>
<p>If you wish to be a registered donor of our bloodbank,please register!</p>
<form method="POST" action="registration.php">
<div class="container"> 
<fieldset>
   <legend>Personal Information:</legend>
<label>    First Name:</label>
   <input type="text" name="firstname" placeholder="firstname" align="right" required>
	<br>
<label>	Last Name: </label>
	<input type="text" name="lastname" placeholder="lastname" align="right"  required>
	<br>
<label>	Age: </label>
	<input type="text" name="age" placeholder="Age" align="right" required>
 	<br>
<label>	Blood-group: </label>
	<input type="text" name="b_grp" placeholder="blood-group" align="right" required>
 	<br>
<label>	Gender: </label>
	<select name="gender" required>
	<option name="gender" value="Male">Male</option>
	<option  name="gender" value="Female">Female</option>
	</select>
	
         
	</fieldset>
  <fieldset> 
 
  <legend>Contact Details</legend>
  <label>Address:</label>
  <input type="textarea" name="address" placeholder="Address" required>
  <br>
  <label>E-mail:</label>
  <input type="email" name="email" placeholder="Email-id" required>
  <br>
  <label>Mobile.No:</label>
  <input type="text" name="mobile"  required>
  <br>
  </fieldset>
 
<input type="submit" name="login" value="Submit"> </input>
<input type="reset" name="reset" value="Reset"> </input><br>

</div>
</form>



  <footer>
  <div align="right">
    <h2><a href="index.php">Home</a></h2>
</div>
    <br/>
     
</footer>
 
</body>
</html>
