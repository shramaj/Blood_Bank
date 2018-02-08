
<?php

 

$res = $mp->findOne(array('user.email' => $_GET['product']));
	
 

?>
<html>
<body>
 <form method="post">
  
<fieldset>
   <legend>Personal Information:</legend>
<label>    First Name:</label>
 <input type="text" name=" firstname" placeholder="firstname" align="right" value="<?php echo $id['firstname']; ?>"] required>
	<br>
<label>	Last Name: </label>
	<input type="text" name="lastname" placeholder="lastname" align="right" value="<?php echo $id['lastname']; ?>"]  required>
	<br>
<label>	Age: </label>
	<input type="text" name="age" placeholder="Age" align="right" value="<?php echo $id['age']; ?>"] required>
 	<br>
<label>	Blood-group: </label>
	<input type="text" name="b_grp" placeholder="blood-group"  value="<?php echo $id['b_grp']; ?>"]align="right" required>
 	<br>
<label>	Gender: </label>
	<select name="gender" <?php echo $id['gender']; ?>"] required>
	 
	</select>
	
         
	</fieldset>
  <fieldset> 
 
  <legend>Contact Details</legend>
  <label>Address:</label>
  <input type="textarea" name="address" placeholder="Address" value=" <?php echo $id['address']; ?>"] required>
  <br>
  <label>E-mail:</label>
  <input type="email" name="email" placeholder="Email-id" value=" <?php echo $id['email']; ?>"] required>
  <br>
  <label>Mobile.No:</label>
  <input type="text" name="mobile" value="<?php echo $id['mobile']; ?>"] required>
  <br>
  </fieldset>
 
<input type="submit" name="login" value="Submit"> </input>
<input type="reset" name="reset" value="Reset"> </input><br>

 
<center>
       <input class="btn btn-info btn-lg" type="submit" name="update" value="Save" >
       <a class="btn btn-info btn-lg" href="user.php" > Cancel </a>  </center>

</form> 
	 

 








 
 
</body>
</html>
