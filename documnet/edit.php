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
    <form action="" method="POST" id="noti" enctype ="multipart/form-data">


    <?php

include "../server.php";

// error_reporting(0);

$name23 = $_GET['name23'];

$selectquery = "SELECT * FROM `newdata` . `bloge` WHERE name23 = '$name23' ";
 $query = mysqli_query($con, $selectquery);
 $result = mysqli_fetch_array($query);


if (isset($_POST['buton'])) {


    $name23 = $_GET['name23'];


        $name23 = $_POST['name23'];
        $title = $_POST['title'];
        $texty = $_POST['texty'];
        $image = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];

        move_uploaded_file($tmp_name, "../uplodpicture/$image");

        $upsql = "UPDATE `bloge` SET `name23`= '$name23',`title`='$title',`texty`= '$texty',`image`='$image'  WHERE name='$name23'";

        if ($con->query($upsql) == true) {
            echo  "successful"; 
           
            
        }
        else{
             echo "error:$upsql<br>$con->error";
         }
        $con->close();
}


?>
        <img src="../picture/img.jpg" alt="this is the picture">
        <h1>Fill The document Properly:</h1>

        <div>
        Name: <input type="text" name="name23"  class="fog"  placeholder="Entered Your Name" value = "<?php echo  $result['name23'] ?>" required>
    </div>
    <br>
    <div>
        Drawing Or crafting Title: <input type="text" name="title" class="fog" placeholder="Entered Your Picture title Waht You want to upplode here" value = "<?php echo  $result['title'] ?>" required>
    </div>
    <br>
    <div>
        Little Describtion of our Drawing Or crafting Title: <textarea id="text" name="texty"  class="fog" rows="20"  cols="100" value="<?php echo  $result["texty"]; ?>"   required></textarea>
    </div>
    <br>
        <input type="file" name="image"   id="file" value="<?php echo $result["image" ] ; ?>" required>
        <button  name ="buton"  id="btn" value="update">Update</button>
    </form>
</body>
</html>


<?php
// error_reporting(0);
//         $name23 = $_POST['name23'];
//         $title = $_POST['title'];
//         $texty = $_POST['texty'];


// // if ($_SERVER["REQUEST_METHOD"] == "POST") {

// if (empty($name23)) {
//     $name23_error = "Pleace entered username properly";
   
// }
// if (empty($title)) {
//     $title_error = "Pleace entered username properly";
// }
// if (empty($texty)) {
//     $texty_error = "Pleace entered username properly";
// }

?>