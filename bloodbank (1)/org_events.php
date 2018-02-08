<?php
	 
{
$con = new MongoClient();
	 if($con){
		$db = $con->bloodbank; //select Database
		$collection = $db->org;    //	Select Collection
		 
		$result = $collection->find();
		$i=1;	
 
 		foreach($result as $doc)
{
		 echo 'hi'.$doc['events']['cname'];
		echo 'hi'.$doc['units']['ap'];

 
	$i=$i+1;
}
 
	}	
 
	}
	?>
