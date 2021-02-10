<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deatails of authority</title>
    <link rel="stylesheet" href="../css/detail.css">
    <script src="../jquary/jquery-3.5.1.min.js"></script>
    <script src="detail.js"></script>
</head>

<body>
    <div id="all">
        <header>
            <div id="nav">
                <img src="../picture/my make logo.jpg" alt="this is the logo Picture">
                <h1>Art & craft </h1>
                <input type="search" name="search" id="search" placeholder="Search Here                 &#x1F50D;">
            </div>
        </header>

        <navber id="det">
            <h1>Details of Authority in Art & craft</h1>
            <h2>You Want to Lern Drawing so you must be Contact with our Authority given bellow Details</h2>
            <div class="fill">
                <div class="go"> Name Of the Owner : Priti Paul.</div>
                <div class="go"> Contact Number : 8617783073.</div>
                <div class="go"> Address of Institute : Rajarhat Bhatenda (Duckbangla),North 24pgs, kollKata-700135,West
                    Bengal.</div>
                <div class="go"> Institute Name : Art & Craft Institute Of Drawing.</div>
            </div>
        </navber>
    </div>

    <section id="coment">
        <h1>Have You Any Details You Want to Know So You can Command Here</h1>
<?php
include "../server.php";
$selectquery = "SELECT * FROM `newdata` . `coment`";
$query = mysqli_query($con, $selectquery);


   while ($row = mysqli_fetch_array($query)) 
   {
      ?>
        <h5><?php echo $row['email'] ; ?></h5>
        <p><?php echo $row['command'] ; ?></p>
  
  
  
           
            <?php
   }            ?>                  
               </head>
        <div class="just">
            <img src="../picture/com.jpg" alt="this is the picture">
            <form  action="<?php  echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="kop">
                <input type="email" name="email" placeholder="Entered Your Email-Id" value="" required>
                <input type="text" name="command" placeholder="Add a Public Comment" value="" required> 
                 <button id="btn" name="button">Command</button>
            </form>
        </div>
      
    </section>
</body>

</html>

<?php

include "../server.php";
error_reporting(0); 



if (isset($_POST['button'])) {
   $email = $_POST['email'];
   $command = $_POST['command'];
  
 $existsql = "SELECT * FROM `newdata` . `coment` WHERE email = '$email'";
 $result = mysqli_query($con, $existsql);
 $num = mysqli_num_rows($result);
 if ($num>0) {
    //  $existsql = true;
    echo "error:you are alredy registerd";
 }
  else{
    $existsql = false;
  

$sql = "INSERT INTO `newdata` . `coment` (`email`, `command`) VALUES ('$email', '$command')"; 

if ($con->query($sql) == true) {
    echo  "successful"; 
}
else{
     echo "error:your Pass word are match";
 }
}
$con->close();

}
?>


<?php

// include "../server.php";
// // error_reporting(0); 

// // if (isset($_POST['dislike'])) {
//   $reply = $_POST['reply'];
   

  

// $sqli = "INSERT INTO `newdata` . `reply` ( `reply`) VALUES ( ' $reply ')";

// if ($con->query($sqli) == true) {
//     echo  "successful"; 
// }
// else{
//      echo "error:$sqli<br>$con->error";
//  }
// $con->close();


?>


<!-- <span class="likebtn-wrapper" data-identifier="item_1"></span>
<script>(
    function(d,e,s){
        if(d.getElementById("likebtn_wjs")
        )return;
        a=d.createElement(e);
        m=d.getElementsByTagName(e)[0];
        a.async=1;
        a.id="likebtn_wjs";
        a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");
</script> -->
