<?php

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if (!$con) {
    die("Erro Connection" . mysqli_connect_error());
}
// echo("Successfully Connect");

?>
