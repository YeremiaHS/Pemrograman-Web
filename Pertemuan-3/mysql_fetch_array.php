<?php
$connection = mysqli_connect("localhost", "root", "", "guru");

if (!$connection) {
    die ("Connection Failed : " . mysqli_connect_error());
} echo "Connected Successfully to guru <br>";

$query = mysqli_query ($connection, "SELECT ID, NAMA_LENGKAP, JURUSAN FROM guru");

if (!$query) {
    echo ("Error query " . mysqli_error($connection));
}
echo "<br> Hasil Numerik <br>";
while ($data = mysqli_fetch_array($query, MYSQLI_NUM)) {
    print "ID : " . $data[0] . "<br>";
    print "NAMA : " . $data[1] . "<br>";
    print "JURUSAN : " . $data[2] . "<br>";
}

mysqli_close($connection);