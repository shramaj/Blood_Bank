<?php
if(isset($_POST['update']))
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
echo $bg;
 
		//connecting to database
		$databse=$con->bloodbank;
		 
		$collection=$databse->events;
		 $collection->update(array('cname' =>$bg),array('$set' => array('cname'=>$cname,'date'=>$date,'place'=>$place,'time'=>$time,'sponsor'=>$sponsor,'event_no'=>$event_no)));

	echo "<script>alert('SUCCESSFULLY UPDATED');
				window.location.href='upcoming.php';
				</script>";
  }
 }
   
?>
