<?php

 


$con = new MongoClient();
$db = $con->bloodbank; //select Database

$collection = $db->user;
$bg=$_GET['user_email'];
echo $bg;
$q = array('email' => $bg);
//		$result = $collection->findOne($q);
	 

$result = $collection->findOne($q);


 
?>
 



<form method="POST" action="update_user1.php">
Firstname:<input type="text" name="firstname" value="<?php echo $result['firstname']; ?>"><br/>
Lastname:<input type="text" name="lastname" value="<?php echo $result['lastname']; ?>"><br/>
Age:<input type="text" name="age" value="<?php echo $result['age']; ?>"><br/>
Gender:<input type="text" name="gender" value="<?php echo $result['gender']; ?>"><br/>
Email:<input type="text" name="email" value="<?php echo $result['email']; ?>"><br/>
Mobile:<input type="text" name="mobile" value="<?php echo $result['mobile']; ?>"><br/>
Address:<input type="text" name="address" value="<?php echo $result['address']; ?>"><br/>
Blood-group:<input type="text" name="b_grp" value="<?php echo $result['b_grp']; ?>"><br/>
<button type="submit" name="update" >UPDATE</button>
</form>
