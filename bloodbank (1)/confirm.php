 
<?php

 
if(isset($_POST['confirm']))
{
	
	 
       

	 $bg = $_POST['bloodgrp'];
	$nou = $_POST['n_of_units'];



 
	// connect to mongodb
  	 $con = new MongoClient();
	 if($con){
 
			 
		$db = $con->bloodbank; //select Database
		$collection = $db->blood;    //	Select Collection

		$q = array("Blood-group" => $bg );
		$result = $collection->findOne($q);
		$num=$result['no_of_units'];
		$n=$num-$nou;
  		
		if($result['Blood-group']==$bg  )
		{	
			$num=$result['no_of_units'];
			if($num >= $nou)
			{
			   	echo "<script>alert('COLLECT IT WITHIN 24 HOURS!BEST WISHES');
			window.location.href='index1.php';
				 </script>";
			 $update=array('no_of_units' => $n);
		 	 $collection->update(
		 		array('Blood-group' => $bg),
		 		array('$set' => $update)
		 		);
 					
			}
			else
			{
			echo "<script >
				alert('UNAVAILABLE');
				 window.location.href='bbanks.php';
				</script>";
			
			}
        		
			
			//header("Location: choice.php");
		}
		 
 



		 
		}
		 
	}

?>





<!DOCTYPE html>
<html>
<head>
 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3/w3.css">
<link rel="stylesheet" href="w3/w3-theme-black.css">
	<link rel="stylesheet" href="w3/font-awesome-4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome-animation.css">
	<!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">-->

	<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
	<link href="Roboto_Condensed/RobotoCondensed-Light.ttf">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">


	<link rel="stylesheet" type="text/css" href="css/main.css">

<li><a href="index1.php" class="w3-red"><i class="fa fa-home w3-margin-right"></i>HOME</a></li>
<header>
 
</header>
<style>
 
.bb
{
margin-left:25%;
}
.algn
{
margin-left:33%;
margin-top:50%;
color:red;
padding-top:30px;
padding-right:20px;
padding-bottom:30px;
padding-left:80px;
background-color:lightblue;
}
.frmt
{
margin-left:75%;
}
#a
{
background:red;
margin-right:33%;
margin-left:30%;
margin-top:5%;
margin-bottom:60%;
}
h1
{
margin-top:100px;
}
</style>
}
</style>
 
</head>
<body style="width: 100%;height: 30%">

 

<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="index1.php" class="w3-red"><i class="fa fa-home w3-margin-right"></i>HOME</a></li>
   
 
    </div>
 
   
 </ul>
 
 
  
 

  <div id="a">
 
<br>
 <center><h1 style="color: #ffffff;margin-top: -5px"><i style="font-size:50px" class="fa fa-question" aria-hidden="true"></i>

NEED BLOOD</h1></center> 
 <form method="POST" action="confirm.php">
<div class="bb" >

<div class="margin" style="padding-top: 10px">
<p class="pull-left" style="color:#FFFFFF;">Blood group:</p><select class="col-lg-pull-3" name="bloodgrp" style="color:black">
	    <option value="A+">A+</option>
	    <option value="A-">A-</option>
	    <option value="B+">B+</option>
	    <option value="B-">B-</option>
	    <option value="AB+">AB+</option>
	    <option value="AB-">AB-</option>
	    <option value="O+">O+</option>
	    <option value="O-">O-</option>
</select>
<br/>
	<br/>
	</div>


	<p style="color: #ffffff" class="pull-left">No of units:</p><input class="col-lg-pull-3" type="number" name="n_of_units" min=1 max=30 required>

	<br/>
	<div class="margin1" style="padding-top: 10px">
<p style="color: #ffffff;padding-top: 5px" class="pull-left">Now confirm</p>
	</div>
	<br/>
	<br/>
<input style="margin-top: 10px" class="btn btn-primary" type ="submit" name="confirm" value="confirm" >
<br/>
  
<br/>
</div>
</form>
 </div>
 
 
 
 

   <h2 style="font-family:times,serif;font-style:italic;margin-top: -765px;"><center><marquee><font color="red">"A single pint can save 3 lives,a single gesture can create a million smiles"</marquee></center></h2>

 
  

 
</body>
</html>
