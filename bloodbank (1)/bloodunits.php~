<?php
session_start();

if(isset($_SESSION['email']))
{
echo "<div class='frmt'> Logged in: ";
 echo $_SESSION['email'] ;
echo "</div>";

}
else{ 
header('Location: index1.php');
}
 
?>   



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
table
{
border-collapse:collapse;
}
table,th,td
{
border:1px solid black;
}
table
{
width:100%;
border-collapse:collapse;
}
th,td
{
padding:10px;
 
}
th
{
height:50px;
 
}
td
{
height:50px;
}
tr:hover
{
background-color:#f5f5f5;
}
h1
{
background:  url(images/header.jpg);
background-size: 100% 100%;
background-repeat: no-repeat;
padding:50px;
}



 

 


</style>
</head>

<body>


 
<div class="events">
   <?php
	$con = new MongoClient();
	 if($con){
		$db = $con->bloodbank; //select Database
		$collection = $db->blood;    //	Select Collection
		//$qry = array("email" => $email,"pass" => $upass);
		$result = $collection->find();
		$i=1;
 
 
	echo ' <table> 
<tr> <th>SERIAL NO</th> <th>BLOODGROUP </th> <th>NO OF UNITS</th>  </tr> ';
		foreach($result as $doc)
		
{
		$event_id=$_id;
	 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["Blood-group"].'</td> <td>' .$doc["no_of_units"].'<a href="update_blood.php?blood_group='.$doc['b_id'].'" > update </a></td> 
</tr>'
 ;
 
	$i=$i+1;
}
echo'</table>';
 		 
 
	}
	?>
 
</div> 
 
 

 <br/>
 <footer>
    <div id="btn">
 <a href = "admin1.php" class = "btn btn-warning"   role = "button">BACK</a> <br/>
<br/>
<a href = "logout.php" class = "btn btn-info"   role = "button">LOGOUT</a> 
</div>
    <br/>
    
</footer> 
</footer> 

</body>
</html>

