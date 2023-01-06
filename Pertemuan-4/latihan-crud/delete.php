<?php

include_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM customers WHERE ID = $id");

if ($result) {
    $message = "Berhasil menghapus customer";
} else {
    $message = "Gagal menghapus data customer";
}

header("Location:index.php?message=" . $message);
