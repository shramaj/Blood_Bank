<?php
if(isset($_POST['delete']))
{
	  
	$cname = $_POST['cname'];
        $date = $_POST['date'];
	$place = $_POST['place'];
	$time = $_POST['time'];
	$sponsor = $_POST['sponsor'];
$event_no = $_POST['event_no'];
   $con = new MongoClient();

 $bg=$_POST['cname'];
	if($con)
	{
 
		//connecting to database
		$databse=$con->bloodbank;
		 
		$collection=$databse->events;
		 $collection->remove(array('cname'=>$bg));

	echo "<script>alert('SUCCESSFULLY DELETED');
				window.location.href='upcoming.php';
				</script>";
  }
 }
   
?>
