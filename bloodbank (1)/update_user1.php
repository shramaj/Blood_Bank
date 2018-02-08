<?php
if(isset($_POST['update']))
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
		 $collection->update(array('email' =>$bg),array('$set' => array('firstname'=>$firstname,'lastname'=>$lastname,'age'=>$age,'gender'=>$gender,'address'=>$address,'email'=>$email,'mobile'=>$mobile,'b_grp'=>$bloodgrp)));

	echo "<script>alert('SUCCESSFULLY UPDATED');
				window.location.href='user.php';
				</script>";
  }
 }
   
?>
