<?php
$connection = mysqli_connect("localhost", "root", "", "guru");
if(!$connection) {
    die ("Connection Failed : " . mysqli_connect_error());
} echo "Connection ke database guru berhasil <br>";

$connection_2 = mysqli_select_db($connection, "guru1");
if(!$connection_2) {
    die ("Connection Failed : " . mysqli_connect_error());
} echo "Connection ke database guru 2 berhasil";