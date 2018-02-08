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


#search
{
width:20em;
height:2em;
} 
#search1
{
width:8em;
height:3em;
} 
table
{
margin-top:5%;
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
 


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:white;
}

li {
    float: left;
}

#nav
{
position: fixed;
   top: 0;
}






</style>
</head>

<body>


 
 
   <?php
	if(isset($_POST['all']))
{
$con = new MongoClient();
	 if($con){
		$db = $con->bloodbank; //select Database
		$collection = $db->user;    //	Select Collection
		//$qry = array("email" => $email,"pass" => $upass);
		$result = $collection->find();
		$i=1;	
$result->sort(array('b_grp' => 1));
echo ' echo "<br>";<table>
<tr> <th>SERIAL NO</th> <th>FIRSTNAME</th> <th>LASTNAME</th> <th>AGE</th> <th>GENDER</th> <th>ADDRESS</th> <th>EMAIL</th> <th>MOBILE</th> <th>BLOOD-GROUP</th></tr> ';
 		foreach($result as $doc)
{
		 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["firstname"].'</td> <td>' .$doc["lastname"].'</td><td>'.$doc["age"].'</td><td>'.$doc["gender"].'</td> <td>' .$doc["address"].'</td> <td>' .$doc["email"].'</td> <td>' .$doc["mobile"].'</td> <td>' .$doc["b_grp"].'<a href="delete_user.php?user_email='.$doc['email'].'"> delete </a></div> </td>
</tr>
 ';

 
	$i=$i+1;
}
echo'</table>';

	}	
 
	}
	?>
 


<?php

if(isset($_POST['ap']))
{
$con = new MongoClient();
	 if($con){
		$db = $con->bloodbank; //select Database
		$collection = $db->user; 
		$bg="A+";  
$i=1; 
		$qry = array("b_grp" => $bg);
		$result = $collection->find($qry);
echo ' <table> 
<tr> <th>SERIAL NO</th> <th>FIRSTNAME</th> <th>LASTNAME</th> <th>AGE</th> <th>GENDER</th> <th>ADDRESS</th> <th>EMAIL</th> <th>MOBILE</th> <th>BLOOD-GROUP</th></tr> ';
 		foreach($result as $doc)
{
		 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["firstname"].'</td> <td>' .$doc["lastname"].'</td><td>'.$doc["age"].'</td><td>'.$doc["gender"].'</td> <td>' .$doc["address"].'</td> <td>' .$doc["email"].'</td> <td>' .$doc["mobile"].'</td> <td>' .$doc["b_grp"].'<a href="delete_user.php?user_email='.$doc['email'].'"> delete </a></div> </td>
</tr>
 ';

 
	$i=$i+1;
}
echo'</table>';

		
 
	}
}
	?>
		
<?php

if(isset($_POST['an']))
{
$con = new MongoClient();
	 if($con){
		$db = $con->bloodbank; //select Database
		$collection = $db->user; 
		$bg="A-";   
		$i=1; 
		$qry = array("b_grp" => $bg);
		$result = $collection->find($qry);
echo ' <table> 
<tr> <th>SERIAL NO</th> <th>FIRSTNAME</th> <th>LASTNAME</th> <th>AGE</th> <th>GENDER</th> <th>ADDRESS</th> <th>EMAIL</th> <th>MOBILE</th> <th>BLOOD-GROUP</th></tr> ';
 		foreach($result as $doc)
{
		 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["firstname"].'</td> <td>' .$doc["lastname"].'</td><td>'.$doc["age"].'</td><td>'.$doc["gender"].'</td> <td>' .$doc["address"].'</td> <td>' .$doc["email"].'</td> <td>' .$doc["mobile"].'</td> <td>' .$doc["b_grp"].'<a href="delete_user.php?user_email='.$doc['email'].'"> delete </a></div> </td>
</tr>
 ';

 
	$i=$i+1;
}
echo'</table>';

 
	}
}
	?>
		
<?php

if(isset($_POST['bp']))
{
$con = new MongoClient();
	 if($con){
		$db = $con->bloodbank; //select Database
		$collection = $db->user; 
		$bg="B+";   
		$i=1; 
		$qry = array("b_grp" => $bg);
		$result = $collection->find($qry);
echo ' <table> 
<tr> <th>SERIAL NO</th> <th>FIRSTNAME</th> <th>LASTNAME</th> <th>AGE</th> <th>GENDER</th> <th>ADDRESS</th> <th>EMAIL</th> <th>MOBILE</th> <th>BLOOD-GROUP</th></tr> ';
 		foreach($result as $doc)
{
		 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["firstname"].'</td> <td>' .$doc["lastname"].'</td><td>'.$doc["age"].'</td><td>'.$doc["gender"].'</td> <td>' .$doc["address"].'</td> <td>' .$doc["email"].'</td> <td>' .$doc["mobile"].'</td> <td>' .$doc["b_grp"].'<a href="delete_user.php?user_email='.$doc['email'].'"> delete </a></div> </td>
</tr>
 ';

 
	$i=$i+1;
}
echo'</table>';

		
 
	}
}
	?>
		
<?php

if(isset($_POST['bn']))
{
$con = new MongoClient();
	 if($con){
		$db = $con->bloodbank; //select Database
		$collection = $db->user; 
		$bg="B-";   
		$i=1; 
		$qry = array("b_grp" => $bg);
		$result = $collection->find($qry);
echo ' <table> 
<tr> <th>SERIAL NO</th> <th>FIRSTNAME</th> <th>LASTNAME</th> <th>AGE</th> <th>GENDER</th> <th>ADDRESS</th> <th>EMAIL</th> <th>MOBILE</th> <th>BLOOD-GROUP</th></tr> ';
 		foreach($result as $doc)
{
		 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["firstname"].'</td> <td>' .$doc["lastname"].'</td><td>'.$doc["age"].'</td><td>'.$doc["gender"].'</td> <td>' .$doc["address"].'</td> <td>' .$doc["email"].'</td> <td>' .$doc["mobile"].'</td> <td>' .$doc["b_grp"].'<a href="delete_user.php?user_email='.$doc['email'].'"> delete </a></div> </td>
</tr>
 ';

 
	$i=$i+1;
}
echo'</table>';

		
 
	}
}
	?>
		
<?php

if(isset($_POST['abp']))
{
$con = new MongoClient();
	 if($con){
		$db = $con->bloodbank; //select Database
		$collection = $db->user; 
		$bg="AB+";   
		$i=1; 
		$qry = array("b_grp" => $bg);
		$result = $collection->find($qry);
echo ' <table> 
<tr> <th>SERIAL NO</th> <th>FIRSTNAME</th> <th>LASTNAME</th> <th>AGE</th> <th>GENDER</th> <th>ADDRESS</th> <th>EMAIL</th> <th>MOBILE</th> <th>BLOOD-GROUP</th></tr> ';
 		foreach($result as $doc)
{
		 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["firstname"].'</td> <td>' .$doc["lastname"].'</td><td>'.$doc["age"].'</td><td>'.$doc["gender"].'</td> <td>' .$doc["address"].'</td> <td>' .$doc["email"].'</td> <td>' .$doc["mobile"].'</td> <td>' .$doc["b_grp"].'<a href="delete_user.php?user_email='.$doc['email'].'"> delete </a></div> </td>
</tr>
 ';

 
	$i=$i+1;
}
echo'</table>';

		
 
	}
}
	?>
		
<?php

if(isset($_POST['abn']))
{
$con = new MongoClient();
	 if($con){
		$db = $con->bloodbank; //select Database
		$collection = $db->user; 
		$bg="AB-";   
		$i=1; 
		$qry = array("b_grp" => $bg);
		$result = $collection->find($qry);
echo ' <table> 
<tr> <th>SERIAL NO</th> <th>FIRSTNAME</th> <th>LASTNAME</th> <th>AGE</th> <th>GENDER</th> <th>ADDRESS</th> <th>EMAIL</th> <th>MOBILE</th> <th>BLOOD-GROUP</th></tr> ';
 		foreach($result as $doc)
{
		 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["firstname"].'</td> <td>' .$doc["lastname"].'</td><td>'.$doc["age"].'</td><td>'.$doc["gender"].'</td> <td>' .$doc["address"].'</td> <td>' .$doc["email"].'</td> <td>' .$doc["mobile"].'</td> <td>' .$doc["b_grp"].'<a href="delete_user.php?user_email='.$doc['email'].'"> delete </a></div> </td>
</tr>
 ';

 
	$i=$i+1;
}
echo'</table>';


		
 
	}
}
	?>
		
 
<?php

if(isset($_POST['op']))
{
$con = new MongoClient();
	 if($con){
		$db = $con->bloodbank; //select Database
		$collection = $db->user; 
		$bg="O+";   
		$i=1; 
		$qry = array("b_grp" => $bg);
		$result = $collection->find($qry);
echo ' <table> 
<tr> <th>SERIAL NO</th> <th>FIRSTNAME</th> <th>LASTNAME</th> <th>AGE</th> <th>GENDER</th> <th>ADDRESS</th> <th>EMAIL</th> <th>MOBILE</th> <th>BLOOD-GROUP</th></tr> ';
 		foreach($result as $doc)
{
		 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["firstname"].'</td> <td>' .$doc["lastname"].'</td><td>'.$doc["age"].'</td><td>'.$doc["gender"].'</td> <td>' .$doc["address"].'</td> <td>' .$doc["email"].'</td> <td>' .$doc["mobile"].'</td> <td>' .$doc["b_grp"].'<a href="delete_user.php?user_email='.$doc['email'].'"> delete </a></div> </td>
</tr>
 ';

 
	$i=$i+1;
}
echo'</table>';


		
 
	}
}
	?>
		
<?php

if(isset($_POST['on']))
{
$con = new MongoClient();
	 if($con){
		$db = $con->bloodbank; //select Database
		$collection = $db->user; 
		$bg="O-";   
		$i=1; 
		$qry = array("b_grp" => $bg);
		$result = $collection->find($qry);
echo ' <table> 
<tr> <th>SERIAL NO</th> <th>FIRSTNAME</th> <th>LASTNAME</th> <th>AGE</th> <th>GENDER</th> <th>ADDRESS</th> <th>EMAIL</th> <th>MOBILE</th> <th>BLOOD-GROUP</th></tr> ';
 		foreach($result as $doc)
{
		 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["firstname"].'</td> <td>' .$doc["lastname"].'</td><td>'.$doc["age"].'</td><td>'.$doc["gender"].'</td> <td>' .$doc["address"].'</td> <td>' .$doc["email"].'</td> <td>' .$doc["mobile"].'</td> <td>' .$doc["b_grp"].'<a href="delete_user.php?user_email='.$doc['email'].'"> delete </a></div> </td>
</tr>
 ';

 
	$i=$i+1;
}
echo'</table>';


		
 
	}
}
	?>
		





 
 
 <div id="nav">
<ul>
<form method="post" action="user.php">
<li><input type="submit" name="all" value="ALL DONORS" id="search1" class="btn btn-danger"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</input></li>
<li><input type="submit" name="ap" value="A+ DONORS" id="search1" class="btn btn-danger"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</input></li>
<li><input type="submit" name="an" value="A- DONORS" id="search1" class="btn btn-danger"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</input></li>
<li><input type="submit" name="bp" value="B+ DONORS" id="search1" class="btn btn-danger">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </input></li>
<li><input type="submit" name="bn" value="B- DONORS" id="search1" class="btn btn-danger"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</input></li>
<li><input type="submit" name="abp" value="AB+ DONORS" id="search1" class="btn btn-danger">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </input></li>
<li><input type="submit" name="abn" value="AB- DONORS" id="search1" class="btn btn-danger"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</input></li>
<li><input type="submit" name="op" value="O+ DONORS" id="search1" class="btn btn-danger">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </input></li>
<li><input type="submit" name="on" value="O- DONORS" id="search1" class="btn btn-danger"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</input></li>
</form>
</ul>
</div>




 <footer>
<br/>
<br/>
<br/>
<div align="center">
<form method="get" action="add_user.php"><button type="submit" class="btn btn-success" id="search">ADD</button></form></div>
<div align="center">
 <a href = "user_pdf.php" class = "btn btn-warning"   role = "button">GENERATE PDF</a> <br/>
 </div>

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

