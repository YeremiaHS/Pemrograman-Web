<?php
$connection = mysqli_connect ("localhost", "root", "", "guru");
if(!$connection) {
    die ("Connection Failed : " . mysqli_connect_error);
} echo "Connected successfully to guru <br>";

$query_insert = mysqli_query($connection, "INSERT INTO guru (ID, NAMA_LENGKAP, ALAMAT, TTL, NIP, JURUSAN) VALUES ('2001', 'Udin Sedunia', 'Surakarta', '12-02-2000', 'YHS201', 'RPL' )");

if(!$query_insert) {
    echo ("Error query " . mysqli_error($connection));
}
mysqli_close($connection);