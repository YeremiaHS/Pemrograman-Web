<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Session 2 - Call </title>
    </head>

    <body>
        <?php
        echo "Hallo, nama saya " . $_SESSION['nama'] . "<br>";
        echo "Nomor absen saya adalah " . $_SESSION['absen'];
        ?>
    </body>
</html>