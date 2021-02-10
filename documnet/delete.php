<?php
include "../server.php";

// error_reporting(0);

$name23 = $_GET['name23'];

$deletquery = "DELETE FROM `newdata`.`bloge` WHERE  name23 = '$name23' ";

$query = mysqli_query($con,$deletquery);



// header ('location:../blog.php');

if ($con->query($deletquery) == true) {
    echo  "successful"; 
   header ('location:blog.php');
    
}
else{
     echo "error:$deletquery<br>$con->error";
 }
$con->close();


?>