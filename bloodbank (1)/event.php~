 



<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3/w3.css">
<link rel="stylesheet" href="w3/w3-theme-white.css">
 <link rel="stylesheet" href="w3/font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome-animation.css">
    <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">-->

    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <link href="Roboto_Condensed/RobotoCondensed-Light.ttf">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">


    <link rel="stylesheet" type="text/css" href="css/main.css">
  
<hr>

 
  
<style>
 
div.events {
    background-color: black;
    color: white;
	
    margin: 20px 0 20px 0;
    padding: 20px;
}
.events h1{
color:lightblue;
text-align:left;
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



.frmt
{
margin-left:75%;
color:white;
}

hr
{
border-width:5px;
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


</style>
</head>

<body>
<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="index1.php" class="w3-red"><i class="fa fa-home w3-margin-right"></i>HOME</a></li>
   
 
    </div>
 
   
 </ul>

 
 
   <?php
	$con = new MongoClient();
	 if($con){
		$db = $con->bloodbank; //select Database
		$collection = $db->events;    //	Select Collection
		//$qry = array("email" => $email,"pass" => $upass);
		$result = $collection->find();
		$i=1;
	echo ' <table>
<tr> <th>EVENT NO</th> <th>EVENTNAME</th> <th>DATE</th> <th>PLACE</th> <th>TIME</th> <th>SPONSOR</th> </tr> ';
 


		foreach($result as $doc)
{
		 

	echo '  <tr><td> ' .$i. '</td> <td>' .$doc["cname"].'</td> <td>' .$doc["date"].'</td><td>'.$doc["place"].'</td><td>'.$doc["time"].'</td> <td>' .$doc["sponsor"].'</td> </div>
</tr>
 ';
	$i=$i+1;}
echo'</table>';
		
 
	}
	?>
 
 
<div align="center">
<form method="get" action="valid.php"><button type="submit">INTERESTED</button></form>
<br/><button onclick="myFunction()">NOT INTERESTED</button><script>function myFunction(){alert("Hope to see you in some other event!");}</script> 
</div>
 
<footer>
<h2 style="font-family:times,serif;font-style:italic"><center><marquee><font color="red">"You don't have to be doctor to save life.Just Donate Blood"</marquee></center></h2>
</footer>
 

</body>
</html>

