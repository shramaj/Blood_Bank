<?php
if(isset($_POST['delete']))
{
	  
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$bloodgrp=$_POST['b_grp'];

   $con = new MongoClient();

 $bg=$_POST['email'];
	if($con)
	{
 
		//connecting to database
		$databse=$con->bloodbank;
		 
		$collection=$databse->user;
		 $collection->remove(array('email'=>$bg));

	echo "<script>alert('SUCCESSFULLY DELETED');
				window.location.href='user.php';
				</script>";
  }
 }
   
?>
