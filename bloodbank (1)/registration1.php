<?php

if(isset($_POST['register']))
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$event_no = $_POST['event'];
 
	$error=array();

	 
	
	// connect to mongodb



   $con = new MongoClient();

//==========================
	if($con)
	{
 
		//connecting to database
		$databse=$con->bloodbank;
		//echo "Database 'mydb' selected";
		
		//connect to specific collection
		$collection=$databse->eventr;
		//echo "Collection user Selected succsessfully";
 
		$query=array('email'=>$email);
		//checking for existing user
		$count=$collection->findOne($query);
 		
		
		if(!count($count))
		{
                      
		 
               
          
			
			 
			$user_d=array('firstname'=>$firstname,'lastname'=>$lastname,'age'=>$age,'gender'=>$gender,'address'=>$address,'email'=>$email,'mobile'=>$mobile, 'event_no'=>$event_no);
			$collection->save($user_d);
			echo "<script >
				alert('Successfully Registered!');
				 window.location.href='index1.php';
				</script>";
			
			 
  
	}	



		else
		{
			 
			?>
        <script>alert('You cannot register for more than one event!');</script>
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

<form method="POST" action="registration1.php">
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
<fieldset>
<legend>Event Interested In</legend>
 
<div class="bb">
Event:<select name="event">
	     <option >select</option>
	    <option value="1">EVENT 1</option>
	    <option value="2">EVENT 2</option>
	    <option value="3">EVENT 3</option>
	    <option value="4">EVENT 4</option>
	  
</select>
</fieldset>

<input type="submit" name="register" value="Register"></input>
<input type="reset" name="reset" value="Reset"> </input><br>

</div>
</form>

  <footer>
  <div align="right">
    <h2><a href="index1.php">Home</a></h2>
</div>
    <br/>
     
</footer>


 
</body>
</html>
