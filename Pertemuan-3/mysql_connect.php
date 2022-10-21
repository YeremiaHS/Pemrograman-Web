<?php
$connection = mysqli_connect("localhost", "root", "", "guru");
if(!$connection) {
    die ("Connection Failed: " .  mysqli_connect_error());
} echo "Connection Successfully";