<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Session 5 - Checking </title>
    </head>

    <body>
        <?php
        
        if(isset($_SESSION['alamat'])) {
            echo "alamat saya ada di " . $_SESSION['alamat'];
        } else {
            echo "variabel session alamat tidak ada atau terhapus";
        }

        ?>
    </body>
</html>