<?php
session_start();

if(!isset($_SESSION['username'])) {
    header('Location:login.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Admin Page </title>
    </head>

    <body>
        <h1><p align=center> Welcome, <?php $_SESSION['username'];?> </p></h1>
        <p align = center> Kamu sedang berada di halaman admin </p>
        <br>
        <h3><p align=center><a href="logout.php"> Logout </a></p></h3>
    </body>
</html>