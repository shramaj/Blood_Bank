<?php
if(isset($_POST['update']))
{
	  
	$bgrp = $_POST['Blood-group'];
	$n_units = $_POST['no_of_units'];
 
 

   $con = new MongoClient();

 $bg=$_POST['Blood-group'];
	if($con)
	{
 
 
		//connecting to database
		$databse=$con->bloodbank;
		 
		$collection=$databse->blood;
		 $collection->update(array('Blood-group' =>$bg),array('$set' => array('Blood-group'=>$bgrp,'no_of_units'=>$n_units)));

	echo "<script>alert('SUCCESSFULLY UPDATED');
				window.location.href='bloodunits.php';
				</script>";
  }
 }
   
?>
