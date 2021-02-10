<?php
error_reporting(0);
include "../server.php";


if (isset($_POST['btn'])) {

    if ($_POST['username']  &&  $_POST['password']  &&  $_POST['number'] &&  $_POST['emailid']  &&  $_POST['add']) {
   
     $username = $_POST['username'];
     $password = $_POST['password'];
     $number = $_POST['number'];
     $emailid = $_POST['emailid'];
     $add = $_POST['add'];
     $date = $_POST['date'];



   $sql ="INSERT INTO `newdata`.`logfo` ( `username`, `password`, `number`, `emailid`, `add`, `date`) VALUES ( '$username', '$password', '$number', '$emailid ', '$add', '$date')";

    if ($con->query($sql) == true) {
    // echo  "successful";
    include "succlog.html";
    exit ("");
    

    }   
        else{
            echo "error:$sql<br>$con->error";
        }
    $con->close();
    }
    else{
        $username = $_POST['username'];
        $password = $_POST['password'];
        $number = $_POST['number'];
        $emailid = $_POST['emailid'];
        $add = $_POST['add'];
        $date = $_POST['date'];
   
    
   if (empty($username )) {
       $username_error = "Pleace entered username properly";
   }
   if (empty($password)) {
       $password_error = "Pleace entered username properly";
   }
   if (empty($number)) {
       $number_error = "Pleace entered username properly";
   }
   if (empty($emailid)) {
       $emailid_error = "Pleace entered username properly";
   }
   if (empty($add)) {
       $add_error = "Pleace entered username properly";
   }
   
   
    }
}
    
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loging page</title>
    <link rel="stylesheet" href="../css/log.css">
</head>

<body>
    <header>
        <div id="nav">
            <img src="../picture/my make logo.jpg" alt="this is the logo Picture">
            <h1>Art & craft </h1>
            <input type="search" name="search" id="search" placeholder="Search Here                 &#x1F50D;">
        </div>
    </header>

    <section>
        <h1>Welcome Our Login Page</h1>
        <h3>Sign Here And Join Our Group</h3>
        <form action="<?php  echo htmlentities($_SERVER['PHP_SELF']);    ?>" method="POST" id="form" >
            User Name: <input type="text" name="username" placeholder="Entered Your Name" id="name" class="in"  value="" required>
           <?php if (isset( $username_error)) {?> <p><?php echo  $username_error ?></p> <?php }?>

            Password:<input type="password" name="password" placeholder="Entered Your Password" id="pass" class="in"  value="" required>
            <?php if (isset( $password_error)) {?> <p><?php echo  $password_error ?></p> <?php }?>


            Phone Number: <input type="number" name="number" placeholder="Entered Your Phone Number" id="ph" class="in"  value="" required>
            <?php if (isset( $number_error)) {?> <p><?php echo  $number_error ?></p> <?php }?>

            Email-Id. : <input type="email" name="emailid" placeholder="Entered Your Email-Id" id="email" class="in"  value="" required>
            <?php if (isset( $emailid_error)) {?> <p><?php echo  $emailid_error ?></p> <?php }?>

            Address: <input type="text" name="add" placeholder="Entered Your Address" id="add" class="in" value="" required>
            <?php if (isset( $add_error)) {?> <p><?php echo  $add_error ?></p> <?php }?>

            Date of Birth: <input type="date" name="date" id="date" class="in">
            <button  name="btn" id="btn" ><a herf="">Submit</a></button>
        </form>
    </section>
</body>
 
</html>



<?php

    $username = $_POST['username'];
     $password = $_POST['password'];
     $number = $_POST['number'];
     $emailid = $_POST['emailid'];
     $add = $_POST['add'];
     $date = $_POST['date'];

 
if (empty($username )) {
    $username_error = "Pleace entered username properly";
}
if (empty($password)) {
    $password_error = "Pleace entered username properly";
}
if (empty($number)) {
    $number_error = "Pleace entered username properly";
}
if (empty($emailid)) {
    $emailid_error = "Pleace entered username properly";
}
if (empty($add)) {
    $add_error = "Pleace entered username properly";
}


?>
