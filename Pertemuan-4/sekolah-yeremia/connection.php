<?php

$conn = mysqli_connect("localhost", "root", "", "sekolah_yeremia");

if(!$conn) {
    echo mysqli_connect_error();
}