<?php

$conn = mysqli_connect("localhost", "root", "", "db_counter_yeremia");

if($conn) {
    echo mysqli_connect_error();
}

$query_count = mysqli_query($conn, "UPDATE tb_counter SET counter = counter + 1");
$query_select = mysqli_query($conn, "SELECT counter FROM tb_counter");
$data = mysqli_fetch_row($query_select);

echo "Anda adalah pengunjung ke- " . $data[0] . "hari ini";

mysqli_close($conn);