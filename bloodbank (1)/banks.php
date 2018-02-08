 



<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3/w3.css">
<link rel="stylesheet" href="w3/w3-white-black.css">
 <link rel="stylesheet" href="w3/font-awesome-4.6.3/css/font-awesome.min.css">
<style>
div.events {
    background-color:white;
    color: black;
	
    margin: 20px 0 20px 0;
    padding: 20px;
}
.events h1{
color:lightblue;
text-align:center;
}
 .frmt
{
margin-left:75%;
 
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


<body >
<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="index1.php" class="w3-red"><i class="fa fa-home w3-margin-right"></i>HOME</a></li>
   
 
    </div>
 
   
 </ul>
 
<header>
   <h2 style="font-family:times,serif;font-style:italic"><center><marquee><font color="red">"Share a little,Care a little"</marquee>
</header>
<h1><center>OTHER BLOOD BANKS (for emergency)<center></h1>
 
<div class="events">
   <?php
	$con = new MongoClient();
	 if($con){
		$db = $con->bloodbank; //select Database
		$collection = $db->bbanks;    //	Select Collection
		//$qry = array("email" => $email,"pass" => $upass);
		$result = $collection->find();
		$i=1;
 echo ' <table> 
<tr> <th>SERIAL NO</th> <th>BLOODBANK NAME</th> <th>ADDRESS</th> <th>TIMING</th> <th>CONTACT</th></tr> ';
		foreach($result as $doc)

{
		 
	 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["b_name"].'</td> <td>' .$doc["add"].'</td><td>'.$doc["contact"].'</td><td>'.$doc["timing"].'</td>
</tr>
 ';

 
	$i=$i+1;
}
echo'</table>';
 

	}
	?>
 
</div> 
 
 
 
 </h2>


    <br/>
    </center>
 

</body>
</html>


