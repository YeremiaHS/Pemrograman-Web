<?php

include_once("config.php");

if(isset($_POST['update'])) {
    $id = $_POST['id'];

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    date_default_timezone_set('Asia/Jakarta');
    $updated = date('Y-m-d H:i:s');

    $result = mysqli_query($conn, "UPDATE customers SET NAME='$name', EMAIL='$email', PHONE='$phone', UPDATED='$updated' WHERE id=$id");

    if ($result) {
        $message = "Customer " . $name . " berhasil di perbarui";
    } else{
        $message = "Gagal memperbarui data customer " . $name;
    }

    header("Location:index.php?message=" . $message);
}