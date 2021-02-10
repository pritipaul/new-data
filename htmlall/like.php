<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/detail.css">
</head>
<body>
    <?php
        include "../server.php";
        $selectquery = "SELECT * FROM `newdata` . `like`";
        $query = mysqli_query($con, $selectquery);
        
        
           while ($row = mysqli_fetch_array($query)) 
           {
      
      
      ?>



        <div class="im">
            <button id="like" name="like" onclick="like()"> <img src="../picture/di.jpg" alt="this is the picture"></button>
            <h5 id="no"><?php echo $row['like'] ; ?></h5>
            <button id="dis" name="dis"><img src="../picture/li.jpg" alt="this is the picture"></button>
            <h5 id="num"><?php echo $row['dis'] ; ?></h5>
        </div>

            <?php
            }            ?>
</body>
</html>
<?php

if (isset($_POST['like'])) {
		$like = $_POST['like'];
		$result = mysqli_query($con, "SELECT * FROM `like` WHERE like=$like");
		$row = mysqli_fetch_array($result);
		$n = $row['like'];

		mysqli_query($con, "INSERT INTO `newdata` . `coment` ( `like`) VALUES ( '$like')");
		mysqli_query($con, "UPDATE posts SET likes=$n+1 WHERE id=$postid");

		echo $n+1;
		exit();
	}
	if (isset($_POST['unliked'])) {
		$postid = $_POST['postid'];
		$result = mysqli_query($con, "SELECT * FROM posts WHERE id=$postid");
		$row = mysqli_fetch_array($result);
		$n = $row['likes'];

		mysqli_query($con, "DELETE FROM likes WHERE postid=$postid AND userid=1");
		mysqli_query($con, "UPDATE posts SET likes=$n-1 WHERE id=$postid");
		
		echo $n-1;
		exit();
    }
    ?>























<?php

include "../server.php";

// if (isset($_POST['like'])) {

//     $like = $_POST['like'];

//   $sqli=" INSERT INTO `newdata` . `like` ( `like`) VALUES ('$like')";
    
//     // $query = mysqli_query($con, "SELECT * FROM `newdata` . `coment`");
//     // $row = mysqli_fetch_array($query);
//     // $n = $row['likes'];

//     // mysqli_query($con, $sql = " INSERT INTO `newdata` . `coment` ( `like`) VALUES ( '$like')");
//     // mysqli_query($con, "UPDATE `coment` SET likes=$n+1 WHERE like=$like");

//     // echo $n+1;
//     // exit();

//     if ($con->query($sqli) == true) {
//         echo  "successful"; 
       
        
//     }
//     else{
//          echo "error:$sqli<br>$con->error";
//      }
//     $con->close();
// }

// if (isset($_POST['dis'])) {
    
//     $like = $_POST['like'];

//     $result = mysqli_query($con, "SELECT * FROM posts WHERE id=$postid");
//     $row = mysqli_fetch_array($result);
//     $n = $row['likes'];

//     mysqli_query($con, "DELETE FROM likes WHERE postid=$postid AND userid=1");
//     mysqli_query($con, "UPDATE posts SET likes=$n-1 WHERE id=$postid");
    
//     echo $n-1;
//     exit();
// }


// ?>