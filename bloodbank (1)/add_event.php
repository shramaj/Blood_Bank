<?php

if(isset($_POST['add']))
{
	$cname = $_POST['cname'];
        $date = $_POST['date'];
	$place = $_POST['place'];
	$time = $_POST['time'];
	$sponsor = $_POST['sponsor'];
$event_no = $_POST['event_no'];
 


   $con = new MongoClient();

//==========================
	if($con)
	{
 
		 
		$databse=$con->bloodbank;
	 
		$collection=$databse->events;
	 
 
		 
                      
		 
               
           
			
			//Save the New user
			$user_data=array('cname'=>$cname,'date'=>$date,'place'=>$place,'time'=>$time,'sponsor'=>$sponsor,'event_no'=>$event_no);
			$collection->save($user_data);
			echo "<script >
				alert('Successfully Registered!');
				 window.location.href='upcoming.php';
				</script>";
			 

 


 }
else
	{
 
		die("Database are not connected");
	}

//========
	

}
?>









<!DOCTYPE html>
<html>
 <style>
fieldset{
  width: 800px;

}
form  {
background: url('images/regis(4).jpg')
no-repeat top left;
size:100% 100%;
} 


      
label
{
display: inline-block;
float:left;
clear:left;
width:100px;
text-align:left;
}
 
</style>
<br>

  
 </div>
 
 
<form method="POST" action="add_event.php">
<div class="container"> 
 
    
<label>    event Name:</label>
   <input type="text" name="cname"   align="right" required>
	<br>
<label>date: </label>
	<input type="text" name="date"   align="right"  required>
	<br>
<label>	place: </label>
	<input type="text" name="place"   align="right" required>
 	<br>
<label>	time: </label>
	<input type="text" name="time"  align="right" required>
 	<br>
<label>	sponsor: </label>
	 	<input type="text" name="sponsor"  align="right" required>
<br/>
<label>	event no: </label>
	 	<input type="text" name="event_no"  align="right" required>
<br/>

	
 
  
 
<input type="submit" name="add" value="Add"> </input>
<input type="reset" name="reset" value="Reset"> </input><br>

</div>
</form>



  <footer>
  <div align="right">
    <h2><a href="upcoming.php">Home</a></h2>
</div>
    <br/>
     
</footer>
 
</body>
</html>
