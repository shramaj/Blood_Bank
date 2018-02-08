<?php

if(isset($_POST['login']))
{
	
	
	$email = $_POST['email'];
	$upass = $_POST['pass'];
	
	
	// connect to mongodb
   $con = new MongoClient();
		//	Select Database
			$db = $con->mydb1;
			echo "Database mydb selected";
		//	Select Collection
			$collection = $db->user1;
			echo "Collection Selected succsessfully";

		
	$qry = array("email" => $email,"password" => $upass);
			$result = $collection->findOne($qry);
	
	
		if($result['password']==$upass)
	{
		$_SESSION['user'] = $result['user'];
		
		?>
        <script>alert('"Login Sucessfull...!! ');</script>
        <?php
		//echo "Login Sucessfull...!!";
		//header("Location: home.php");
	}
	else
	{
		?>
        <script>alert('Wrong Details');</script>
        <?php
	}
	
}
?>






<html>
<head><link rel="stylesheet" href="/home/ubuntu/log.css">
<body>
<div class="login">
  <div class="heading">
    <h2>Sign in</h2>
    <form action="#">

      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" placeholder="Username or email">
          </div>

        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" placeholder="Password">
        </div>

        <button type="submit" class="float">Login</button>
       </form>
 		</div>
 </div>
</body>
</html>
