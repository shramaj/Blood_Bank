
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome-animation.css">
    <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">-->

    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <link href="Roboto_Condensed/RobotoCondensed-Light.ttf">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">


    <link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="w3/w3.css">
<link rel="stylesheet" href="w3/w3-white-black.css">
 <link rel="stylesheet" href="w3/font-awesome-4.6.3/css/font-awesome.min.css">
 
<style>
#f
{
padding-left:40px;
}
h3
{
padding-left:80px;

}
#search1
{
width:8em;
height:3em;
}
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

<h3> <b>DONORS OF OUR BLOOD BANK</b></h3>

 <div id="f">
   
<ul>
<form method="post" action="bbanks.php">
 
<input type="submit" name="ap" value="A+ DONORS" id="search1" class="btn btn-danger"> &nbsp</input> 
 <input type="submit" name="an" value="A- DONORS" id="search1" class="btn btn-danger"> &nbsp </input> 
 <input type="submit" name="bp" value="B+ DONORS" id="search1" class="btn btn-danger">&nbsp</input> 
 <input type="submit" name="bn" value="B- DONORS" id="search1" class="btn btn-danger"> &nbsp </input> 
 <input type="submit" name="abp" value="AB+ DONORS" id="search1" class="btn btn-danger">&nbsp </input>
 <input type="submit" name="abn" value="AB- DONORS" id="search1" class="btn btn-danger"> &nbsp </input> 
 <input type="submit" name="op" value="O+ DONORS" id="search1" class="btn btn-danger">&nbsp </input> 
 <input type="submit" name="on" value="O- DONORS" id="search1" class="btn btn-danger"> &nbsp </input> 
</form>
</ul>

</div>



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
		 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["firstname"].'</td> <td>' .$doc["lastname"].'</td><td>'.$doc["age"].'</td><td>'.$doc["gender"].'</td> <td>' .$doc["address"].'</td> <td>' .$doc["email"].'</td> <td>' .$doc["mobile"].'</td> <td>' .$doc["b_grp"].'</div> </td>
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
		$qry = array("b_grp" => $bg);
		$result = $collection->find($qry);
echo ' <table> 
<tr> <th>SERIAL NO</th> <th>FIRSTNAME</th> <th>LASTNAME</th> <th>AGE</th> <th>GENDER</th> <th>ADDRESS</th> <th>EMAIL</th> <th>MOBILE</th> <th>BLOOD-GROUP</th></tr> ';
 		foreach($result as $doc)
{
		 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["firstname"].'</td> <td>' .$doc["lastname"].'</td><td>'.$doc["age"].'</td><td>'.$doc["gender"].'</td> <td>' .$doc["address"].'</td> <td>' .$doc["email"].'</td> <td>' .$doc["mobile"].'</td> <td>' .$doc["b_grp"].'</div> </td>
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
		$qry = array("b_grp" => $bg);
		$result = $collection->find($qry);
echo ' <table> 
<tr> <th>SERIAL NO</th> <th>FIRSTNAME</th> <th>LASTNAME</th> <th>AGE</th> <th>GENDER</th> <th>ADDRESS</th> <th>EMAIL</th> <th>MOBILE</th> <th>BLOOD-GROUP</th></tr> ';
 		foreach($result as $doc)
{
		 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["firstname"].'</td> <td>' .$doc["lastname"].'</td><td>'.$doc["age"].'</td><td>'.$doc["gender"].'</td> <td>' .$doc["address"].'</td> <td>' .$doc["email"].'</td> <td>' .$doc["mobile"].'</td> <td>' .$doc["b_grp"].'</div> </td>
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
		$qry = array("b_grp" => $bg);
		$result = $collection->find($qry);
echo ' <table> 
<tr> <th>SERIAL NO</th> <th>FIRSTNAME</th> <th>LASTNAME</th> <th>AGE</th> <th>GENDER</th> <th>ADDRESS</th> <th>EMAIL</th> <th>MOBILE</th> <th>BLOOD-GROUP</th></tr> ';
 		foreach($result as $doc)
{
		 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["firstname"].'</td> <td>' .$doc["lastname"].'</td><td>'.$doc["age"].'</td><td>'.$doc["gender"].'</td> <td>' .$doc["address"].'</td> <td>' .$doc["email"].'</td> <td>' .$doc["mobile"].'</td> <td>' .$doc["b_grp"].'</div> </td>
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
		$qry = array("b_grp" => $bg);
		$result = $collection->find($qry);
echo ' <table> 
<tr> <th>SERIAL NO</th> <th>FIRSTNAME</th> <th>LASTNAME</th> <th>AGE</th> <th>GENDER</th> <th>ADDRESS</th> <th>EMAIL</th> <th>MOBILE</th> <th>BLOOD-GROUP</th></tr> ';
 		foreach($result as $doc)
{
		 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["firstname"].'</td> <td>' .$doc["lastname"].'</td><td>'.$doc["age"].'</td><td>'.$doc["gender"].'</td> <td>' .$doc["address"].'</td> <td>' .$doc["email"].'</td> <td>' .$doc["mobile"].'</td> <td>' .$doc["b_grp"].'</div> </td>
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
		$qry = array("b_grp" => $bg);
		$result = $collection->find($qry);
echo ' <table> 
<tr> <th>SERIAL NO</th> <th>FIRSTNAME</th> <th>LASTNAME</th> <th>AGE</th> <th>GENDER</th> <th>ADDRESS</th> <th>EMAIL</th> <th>MOBILE</th> <th>BLOOD-GROUP</th></tr> ';
 		foreach($result as $doc)
{
		 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["firstname"].'</td> <td>' .$doc["lastname"].'</td><td>'.$doc["age"].'</td><td>'.$doc["gender"].'</td> <td>' .$doc["address"].'</td> <td>' .$doc["email"].'</td> <td>' .$doc["mobile"].'</td> <td>' .$doc["b_grp"].'</div> </td>
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
		$qry = array("b_grp" => $bg);
		$result = $collection->find($qry);
echo ' <table> 
<tr> <th>SERIAL NO</th> <th>FIRSTNAME</th> <th>LASTNAME</th> <th>AGE</th> <th>GENDER</th> <th>ADDRESS</th> <th>EMAIL</th> <th>MOBILE</th> <th>BLOOD-GROUP</th></tr> ';
 		foreach($result as $doc)
{
		 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["firstname"].'</td> <td>' .$doc["lastname"].'</td><td>'.$doc["age"].'</td><td>'.$doc["gender"].'</td> <td>' .$doc["address"].'</td> <td>' .$doc["email"].'</td> <td>' .$doc["mobile"].'</td> <td>' .$doc["b_grp"].'</div> </td>
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
		$qry = array("b_grp" => $bg);
		$result = $collection->find($qry);
echo ' <table> 
<tr> <th>SERIAL NO</th> <th>FIRSTNAME</th> <th>LASTNAME</th> <th>AGE</th> <th>GENDER</th> <th>ADDRESS</th> <th>EMAIL</th> <th>MOBILE</th> <th>BLOOD-GROUP</th></tr> ';
 		foreach($result as $doc)
{
		 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["firstname"].'</td> <td>' .$doc["lastname"].'</td><td>'.$doc["age"].'</td><td>'.$doc["gender"].'</td> <td>' .$doc["address"].'</td> <td>' .$doc["email"].'</td> <td>' .$doc["mobile"].'</td> <td>' .$doc["b_grp"].'</div> </td>
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
		$qry = array("b_grp" => $bg);
		$result = $collection->find($qry);
echo ' <table> 
<tr> <th>SERIAL NO</th> <th>FIRSTNAME</th> <th>LASTNAME</th> <th>AGE</th> <th>GENDER</th> <th>ADDRESS</th> <th>EMAIL</th> <th>MOBILE</th> <th>BLOOD-GROUP</th></tr> ';
 		foreach($result as $doc)
{
		 echo '  <tr><td> ' .$i. '</td> <td>' .$doc["firstname"].'</td> <td>' .$doc["lastname"].'</td><td>'.$doc["age"].'</td><td>'.$doc["gender"].'</td> <td>' .$doc["address"].'</td> <td>' .$doc["email"].'</td> <td>' .$doc["mobile"].'</td> <td>' .$doc["b_grp"].'</div> </td>
</tr>
 ';

 
	$i=$i+1;
}
echo'</table>';


		
 
	}
}
	?>
		
 
 













</div>
 
        
        
      </div>
    </div>
  </div>
 
 
















 
 
 


    <br/>
    </center>




<div class="container">
             
 

             
                 
                                <button class=" btn btn-danger" data-toggle="collapse" href="#collapse1">OTHER BLOOD BANKS</button>
                          
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body" style="padding-left:25px">

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>SERIAL NO</th>
                                        <th>BLOOD BANK</th>
                                        <th>ADDRESS</th>
                                        <th>TIMING</th>
                                        <th>CONTACT</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><b>1</b></td>
                                        <td>Jankalyan Raktapedhi</td>
                                        <td>1003, Sarasbaug Swargate, Shukrawar Peth, Behind Swargate Police Station, Sarasbag Road, Pune, Maharashtra 411002</td>
                                        <td>02024449527</td>
                                        <td>12:00am - 11:30pm</td>
                                    </tr>
                                    <tr>
                                        <td><b>2</b></td>
                                        <td>Gholap Blood Bank</td>
                                        <td>301, 3rd Floor Ashoka Tower, Pune-Satara Road, Opp. City Pride Theater, Parvati, Taware Colony, Parvati Paytha, Pune, Maharashtra 411009</td>
                                        <td>09822442140</td>
                                        <td>12:00am - 11:59pm</td>
                                    </tr>
                                    <tr>
                                        <td><b>2</b></td>
                                        <td>Aadhar Blood Bank</td>
                                        <td>Warris Heights, Pune Satara Road, New Nurses Town Co Operative Society, Dhankawadi, Pune, Maharashtra 411043</td>
                                        <td>9945652378</td>
                                        <td>10:00am - 6:00pm</td>
                                    </tr>
                                    <tr>
                                        <td><b>3</b></td>
                                        <td>Akshay Blood Bank</td>
                                        <td>Survey No. 10-A, Shree Mangal Building, Part No. 2-A/3, Saswad Rd, Unnathi Nagar, Hadapsar, Pune, Maharashtra 411028</td>
                                        <td>09890244339</td>
                                        <td>11:59am - 11:59pm</td>
                                    </tr>
                                    <tr>
                                        <td><b>4</b></td>
                                        <td>Pimpri Serological Institute Blood Bank</td>
                                        <td>Esteem Tower, 4th Floor, Near Surya Hotel, Old Mumbai Pune Hwy, Kharalwadi, Pimpri Colony, Pimpri-Chinchwad, Maharashtra 411018</td>
                                        <td>09822656541</td>
                                        <td>12:00am - 11:30pm</td>
                                    </tr>
                                  
                                    </tbody>
                                </table>

                            </div>
                      
                    </div>
                </div>
            </div>






<br/>


</footer> 
<script rel="script" type="text/javascript" src="js/jquery-2.2.1.min.js"></script>
<script rel="script" type="text/javascript" src="js/wow.min.js"></script>
<script rel="script" type="text/javascript" src="js/bootstrap.js"></script>
<script rel="script" type="text/javascript" src="css/script.js"></script>
</body>
</html>


