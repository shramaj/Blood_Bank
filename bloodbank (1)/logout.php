<?php
session_start();

if(isset($_SESSION['email']))
{
echo "<div class='frmt'> Logged in: ";
 echo $_SESSION['email'] ;
echo "</div>";

}
else{ 
header('Location:index1.php');
}
 
?> 






 <?php

     session_start();
     session_destroy();
     header("Location: index1.php");

    exit;
    ?>
 

