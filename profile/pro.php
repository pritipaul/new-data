<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <style>
        #nav{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    position: relative;
    margin-left: -8px;
    margin-right: -8px;
}
img{
    height: 80px;
    width: 80px;
    margin-left: 30px;
}
#search{
    height: 30px;
    margin: 15px;
 }
 #nav h1{
     font-size: 50px;
     margin-top: 8px;
     color: blanchedalmond;
 }
 #nav::before{
    content: "";
    background-color: black;
    width: 100%;
    height: 100%;
    position: absolute;
    top: -10px;
    z-index: -1;
    opacity: 0.7;
 } 
        #pro img{
            border: 5px solid red;
            border-radius: 50px;
            display:block;
            margin:auto;
            height:200px;
            width:200px;
        }
        .pot h1{
            color: black;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            display: flex;
            justify-content: center;
             align-items: center;
             margin-top:50px;
        }
    </style>
</head>
<body>
<header>
        <div id="nav">
            <img src="../picture/my make logo.jpg" alt="this is the logo Picture">
            <h1>Art & craft </h1>
            <input type="search" name="search" id="search" placeholder="Search Here                 &#x1F50D;">
        </div>
    </header>
   <div id="pro">
        <img src="../uplodpicture/<?php error_reporting(0); echo $picture ;?>" alt="this is the picture">
    </div>
    <div class="pot">
        <h1><?php error_reporting(0);  echo $name2 ; ?></h1>
        <h1><?php  error_reporting(0); echo $phone2; ?></h1>
        <h1><?php error_reporting(0); echo $emailid?></h1>
    </div>
</body>
</html>