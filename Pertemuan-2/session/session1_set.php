<?php

session_start();

$_SESSION['nama'] = "Yeremia Herbert Santoso";

$_SESSION['absen'] = 32;

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Session 1 - Set </title>
    </head>

    <body>
        <?php
        echo "Nama saya " . $_SESSION['nama'] . "<br>" . "Nomor absen " . $_SESSION['absen']
        ?>
    </body>
</html>