   
<?php 
// session_start();
//  if (!isset($_SESSION['username']) || $_SESSION['username'] != TRUE) {
//      include "../loging/loging.php";
//     exit ("");
//  }
//  else{

//  }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloge Post</title>
    <link rel="stylesheet" href ="../css/blog.css">
</head>

<body>
    <header>
        <div id="nav">
            <img src="../picture/my make logo.jpg" alt="this is the logo Picture">
            <h1>Art & craft </h1>
            <input type="search" name="search" id="search" placeholder="Search Here                 &#x1F50D;">
        </div>
    </header>
    <section id="hop">
        <div id="post">

<?php
include "../server.php";
     $selectquery = "SELECT * FROM `newdata` . `bloge`";
      $query = mysqli_query($con, $selectquery);
 

   while($row = mysqli_fetch_array($query))
            {
?>
            <h1>Name of Cantidet: <?php echo $row['name23'] ; ?></h1>
            <h2>Post Title: <?php echo $row['title'] ; ?></h2>
            <h4>Description: <?php echo $row['texty'] ; ?></h4>
            <img src="../uplodpicture/<?php echo $row['image'] ; ?>" alt="this is the picture">
            <div class="ton">
                <button id="btn"><a href="edit.php?name23=<?php echo $row['name23'] ; ?>">Edit</a></button>
                <button id="btn2"><a href="delete.php?name23=<?php echo $row['name23'] ; ?>">Delete</a></button>
            </div>
        </div>
<!--         
        <div id="list">
            <h1>Resent Post</h1>
            <h1> </h1>

        </div> -->
    <?php       
     }
     ?>
  
    </section>
    
</body>

</html>'
      
  