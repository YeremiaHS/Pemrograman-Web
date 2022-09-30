<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Session 4 - Error </title>
    </head>

    <body>
        <?php
        echo "Isi dari variabel alamat anda adalah " . $_SESSION['alamat'];
        ?>
    </body>
</html>