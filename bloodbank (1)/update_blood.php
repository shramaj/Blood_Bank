<?php

 


$con = new MongoClient();
$db = $con->bloodbank; //select Database

$collection = $db->blood;
$bg=$_GET['blood_group'];
 
$q = array('b_id' => $bg);
//		$result = $collection->findOne($q);
	 

$result = $collection->findOne($q);

//if($result)

 
 

//}
?>
 



<form method="post" action="update_blood1.php">
Blood-group:<input type="text" name="Blood-group" value="<?php echo $result['Blood-group']; ?>"><br/>
No of units:<input type="text" name="no_of_units" value="<?php echo $result['no_of_units']; ?>"><br/>
 
<button type="submit" name="update" >UPDATE</button>
</form>
