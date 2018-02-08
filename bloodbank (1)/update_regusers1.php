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
	 

   $con = new MongoClient();

 $bg=$_POST['email'];
	if($con)
	{
 
		//connecting to database
		$databse=$con->bloodbank;
		 
		$collection=$databse->eventr;
		 $collection->update(array('email' =>$bg),array('$set' => array('firstname'=>$firstname,'lastname'=>$lastname,'age'=>$age,'gender'=>$gender,'address'=>$address,'email'=>$email,'mobile'=>$mobile)));

	echo "<script>alert('SUCCESSFULLY UPDATED');
				window.location.href='upcoming.php';
				</script>";
  }
 }
   
?>
