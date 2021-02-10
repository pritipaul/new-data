<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloge Page</title>
    <link rel="stylesheet" href="../css/notic.css">
    
</head>
<body>
    <header>
        <div id="nav">
            <img src="../picture/my make logo.jpg" alt="this is the logo Picture">
            <h1>Art & craft </h1>
            <input type="search" name="search" id="search" placeholder="Search Here                 &#x1F50D;">
        </div>
    </header>
    <div class="bom">
    <h1>Successfully Post Your Bloge !</h1>
    <img src="../uplodpicture/<?php echo $image ?>" alt="this is the picture" >
    <h3><?php  error_reporting(0);  echo $name23; ?>     This is Your Post Picture</h3>
    <p>You Want to see The all candited Bloge post so you can click this Link which is Given Bellow</p>
    <ul>
        <li><a href="../documnet/blog.php" >Click Here & See</a></li>
    </ul>

</div>
</body>
</html>