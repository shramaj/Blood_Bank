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
width:50%;
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


</style>
</head>

<body>


 
<div class="events">
   <?php
	$con = new MongoClient();
	 if($con){
		$db = $con->bloodbank; //select Database
		$collection = $db->events;    //	Select Collection
		//$qry = array("email" => $email,"pass" => $upass);
		$result = $collection->find();
		$i=1;
 echo ' <br/><table>
<tr> <th>EVENT NO</th> <th>EVENTNAME</th> <th>DATE</th> <th>PLACE</th> <th>TIME</th> <th>SPONSOR</th> <th>CHANGES</th></tr>';
 


		foreach($result as $doc)
{
		 

	echo '  <tr><td> ' .$i. '</td> <td>' .$doc["cname"].'</td> <td>' .$doc["date"].'</td><td>'.$doc["place"].'</td><td>'.$doc["time"].'</td> <td>' .$doc["sponsor"].'</td> <td><br/><a href="reg_users.php?eventno='.$doc['event_no'].'"> registered users </a><br/><a href="update_event.php?eventn='.$doc['cname'].'"> update </a><br/><a href="delete_event.php?eventn='.$doc['cname'].'"> delete </a></td> </div>
</tr>
 ';
 
	$i=$i+1;}

echo'</table>';
		
 

		
 
	}
	?>
 
</div> 
 
<div align="center">
<form method="get" action="add_event.php"><button type="submit" class="btn btn-success" id="search">ADD</button></form></div>
  
<footer>
     <div id="btn">
 <a href = "admin1.php" class = "btn btn-warning"   role = "button">BACK</a> <br/>
<br/>
<a href = "logout.php" class = "btn btn-info"   role = "button">LOGOUT</a> 
</div>
    <br/>
    
</footer>     
  

</body>
</html>

