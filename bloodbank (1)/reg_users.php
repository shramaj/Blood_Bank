  



<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script src="bootstrap-3.3.7-dist/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

 
 
<style>
 
 
#btn
{
position:relative;
margin-left:90%;
}
.align{
width:33%;
float:left;
height:300px;
}



@media only screen and (max-width: 768px) {
    .align {
        width:100%;
    }
}


#search
{
width:20em;
height:2em;
}
 

 


</style>
</head>

<body >


 
<div class="events">
   <?php
	$con = new MongoClient();
	 if($con){
		$db = $con->bloodbank; //select Database
		$collection = $db->eventr;    //	Select Collection
		 $bg=$_GET['eventno'];
		$q=array("event_no"=>$bg);
		$result = $collection->find($q);
		$i=1;
	 
 		foreach($result as $doc)
{
		 

	echo '<div class="align">
		
		<h1>USER '.$i.'</h1> 
  <br><b>FIRSTNAME:</b>'.$doc["firstname"].'<b><br>LASTNAME:</b>'.$doc["lastname"].'<br><b>AGE:</b>'.$doc["age"].'<br><b>GENDER:</b>'.$doc["gender"].'<br><b>ADDRESS:</b>'.$doc["address"].' <br><b>MOBILE:</b>'.$doc["mobile"].'<br><b>EMAIL:</b>'.$doc["email"].'<br/><a href="delete_regusers.php?user_email='.$doc['email'].'"> delete </a></div>';



           
?>

       
         
 

<?php
	$i=$i+1;}

		
 
	}
	?>
 
</div> 
 
<div align="center">
<form method="get" action="add_user_event.php"><button type="submit" class="btn btn-success" id="search">ADD</button></form></div>
<br/>
 <footer>
     <div id="btn">
 <a href = "upcoming.php" class = "btn btn-warning"   role = "button">BACK</a> <br/>
<br/>
<a href = "logout.php" class = "btn btn-info"   role = "button">LOGOUT</a> 
</div>
    <br/>
    
</footer>     


</body>
</html>

