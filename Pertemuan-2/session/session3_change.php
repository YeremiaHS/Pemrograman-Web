<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Session 3 - Change </title>
    </head>

    <body>
        <?php
        
        $_SESSION['nama'] = "Udin";

        echo "variabel nama sudah diganti menjadi " . $_SESSION['nama'];

        ?>
    </body>
</html>