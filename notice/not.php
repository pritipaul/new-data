<?php

include "../server.php";

error_reporting(0);

if (isset($_POST['buton'])) {

 if ($_POST['name23'] &&    $_POST['title']  &&  $_POST['texty']) {

        $name23 = $_POST['name23'];
        $title = $_POST['title'];
        $texty = $_POST['texty'];
        $image = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];

        move_uploaded_file($tmp_name, "../uplodpicture/$image");

        $sql = "INSERT INTO `newdata` . `bloge` ( `name23`, `title`, `texty`, `image`) VALUES ( '$name23', '$title', '$texty','$image')";

        if ($con->query($sql) == true) {
            // echo  "successful"; 
            include "notic.php";
            exit ("");
            
        }
        else{
             echo "error:$sql<br>$con->error";
         }
        $con->close();
}
else{
    error_reporting(0);
        $name23 = $_POST['name23'];
        $title = $_POST['title'];
        $texty = $_POST['texty'];


// if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($name23)) {
    $name23_error = "Pleace entered username properly";
   
}
if (empty($title)) {
    $title_error = "Pleace entered username properly";
}
if (empty($texty)) {
    $texty_error = "Pleace entered username properly";
}

}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Page</title>
    <link rel="stylesheet" href="../css/not.css">
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
        <h1>Welcome Our art &craft Page</h1>
        <h3> Have Yours  many Experience About Drawing so You can Share Your Experience with us Fill the Documet and Start Share your Experience about Drawing and Post Your Beutiful Drawing with Your details.</h3>
        <img src="../picture/car.jpg" alt="this is the picture">
    </section>
    <form action="<?php  echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" id="noti" enctype ="multipart/form-data">
        <img src="../picture/img.jpg" alt="this is the picture">
        <h1>Fill The document Properly:</h1>

        <div>
        Name: <input type="text" name="name23"  class="fog"  placeholder="Entered Your Name">
        <?php if (isset( $name23_error)) {?> <p>*<?php echo  $name23_error ?></p> <?php }?>

    </div>
    <br>
    <div>
        Drawing Or crafting Title: <input type="text" name="title" class="fog" placeholder="Entered Your Picture title Waht You want to upplode here">
        <?php if (isset( $title_error)) {?> <p><?php echo  $title_error ?></p> <?php }?>

    </div>
    <br>
    <div>
        Little Describtion of our Drawing Or crafting Title: <textarea id="text" name="texty"  class="fog" rows="5"  cols="100"></textarea>
        <?php if (isset( $texty_error)) {?> <p><?php echo  $texty_error ?></p> <?php }?>

    </div>
    <br>
        <input type="file" name="image"   id="file"> 
        <button  name ="buton"  id="btn">Submit</button>
    </form>
</body>
</html>


<?php
error_reporting(0);
        $name23 = $_POST['name23'];
        $title = $_POST['title'];
        $texty = $_POST['texty'];


// if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($name23)) {
    $name23_error = "Pleace entered username properly";
   
}
if (empty($title)) {
    $title_error = "Pleace entered username properly";
}
if (empty($texty)) {
    $texty_error = "Pleace entered username properly";
}

?>