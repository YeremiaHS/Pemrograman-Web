<?php
session_start();

if(isset($_SESSION['username'])) {
    session_destroy();
    echo '<script>
    alert("Anda berhasil logout");
    window.location="login.php";
    </script>';
} else {
    header("location:login.php");
    exit();
}

?>