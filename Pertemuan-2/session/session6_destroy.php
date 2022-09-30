<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Session 6 - Destroy </title>
    </head>

    <body>
        <?php
        
        unset($_SESSION['absen']);

        if(isset($_SESSION['absen'])) {
            echo "nomor absen saya adalah " . $_SESSION['absen'];
        } else {
            echo "Maaf nomor absen tidak ditemukan ";
        }
        
        ?>
    </body>
</html>