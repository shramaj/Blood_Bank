<?php

echo "event :".$_GET['eventn'];


$con = new MongoClient();
$db = $con->bloodbank; //select Database

$collection = $db->events;
$bg=$_GET['eventn'];
echo $bg;
$q = array('cname' => $bg);
//		$result = $collection->findOne($q);
	 

$result = $collection->findOne($q);

//if($result)

 
//}
?>
 


<form method="post" action="delete_event1.php">
Event name:<input type="text" name="cname" value="<?php echo $result['cname']; ?>"><br/>
Date:<input type="text" name="date" value="<?php echo $result['date']; ?>"><br/>
Place:<input type="text" name="place" value="<?php echo $result['place']; ?>"><br/>
Time:<input type="text" name="time" value="<?php echo $result['time']; ?>"><br/>
Sponsor:<input type="text" name="sponsor" value="<?php echo $result['sponsor']; ?>"><br/>
Event-no:<input type="text" name="event_no" value="<?php echo $result['event_no']; ?>"><br/>
 
<button type="submit" name="delete" >DELETE</button>
</form>
