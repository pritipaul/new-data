<?php
include "../server.php";
error_reporting(0);


if (isset($_POST['btm'])) {

if ($_POST['name2'] &&   $_POST['phone2']  &&  $_POST['emailid']) {


$name2 = $_POST['name2'];
$phone2 = $_POST['phone2'];
$emailid = $_POST['emailid'];
$picture = $_FILES['picture']['name'];
        $tmp_name = $_FILES['picture']['tmp_name'];

        move_uploaded_file($tmp_name, "../uplodpicture/$picture");
       $sql = "INSERT INTO `newdata` . `kite` ( `name2`, `phone2`, `emailid`, `picture`) VALUES ( '$name2', '$phone2', '$emailid', '$picture')";

      if ($con->query($sql) == true) {
        //   echo  "successful";     
        include "pro.php";
        exit ("");
         
      }
      else{
           echo "error:$sql<br>$con->error";
       }
      $con->close();
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="../css/prof.css">
</head>

<body>
    <header>
        <div id="nav">
            <img src="../picture/my make logo.jpg" alt="this is the logo Picture">
            <h1>Art & craft </h1>
            <input type="search" name="search" id="search" placeholder="Search Here                 &#x1F50D;">
        </div>
    </header>
    <h1>You Want to Make a Profile So fill the form</h1>
    <nav>
        <img src="../picture/profil.jpg" alt="this is the picture">


        <form action="<?php  echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" id="form"
            enctype="multipart/form-data">

            Name: <input type="text" name="name2" placeholder="Entered Your Name" value="" required>
            <?php if (isset( $name2_error)) {?> <p><?php echo  $name2_error ?></p> <?php }?>

            <br>

            Phone Number: <input type="number" name="phone2" placeholder="Entered Your Phone Number" value="" required>
            <?php if (isset( $phone2_error)) {?> <p><?php echo  $phone2_error ?></p> <?php }?>
            <br>
            Email-Id: <input type="email" name="emailid" placeholder="Entered your Email-id" value="" required>
            <?php if (isset( $emailid_error)) {?> <p><?php echo  $emailid_error ?></p> <?php }?>


            Profile Picture: <input type="file" name="picture" id="pro">
            <button name="btm" id="btn">Submit</button>
        </form>
    </nav>
</body>

</html>






<?php
error_reporting(0);
$name2 = $_POST['name2'];
$phone2 = $_POST['phone2'];
$emailid = $_POST['emailid'];



// if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($name2)) {
    $name2_error = "Pleace entered username properly";
   
}
if (empty($phone2)) {
  $phone2_error = "Pleace entered username properly";
}
if (empty($emailid)) {
  $emailid_error = "Pleace entered username properly";
}

?>