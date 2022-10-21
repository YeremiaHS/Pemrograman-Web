<?php
$connection = mysqli_connect("localhost", "root", "", "guru");

if (!$connection) {
    die ("Connection Failed : " . mysqli_connect_error);
} echo "Connected successfully to guru <br>";

$query = mysqli_query($connection, "SELECT ID, NAMA_LENGKAP, JURUSAN FROM guru");

if (!$query) {
    echo ("Error query " . mysqli_error($connection));
} 
$data = mysqli_fetch_assoc($query);
print_r($data);

mysqli_close($connection); 