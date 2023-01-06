<?php

if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    date_default_timezone_set('Asia/Jakarta');
    $created = date("Y-m-d H:i:s");

    include_once("config.php");

    $result = mysqli_query($conn, "INSERT INTO customers(NAME, EMAIL, PHONE, CREATED) VALUES ('$name', '$email', '$phone', '$created')");

    echo "Customer " . $name . " added successfully. <a href='index.php'> View Customers </a>";
}
