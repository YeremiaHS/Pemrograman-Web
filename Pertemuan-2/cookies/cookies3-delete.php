<?php
setcookie("user", "", time() -2400, "/");

if(isset($_COOKIE['user'])) {
    echo "Cookie " . 'user' . " telah diatur! <br/>";
    echo "Nilainya adalah " . $_COOKIE['user'];
} else {
    echo "Nama cookies " . 'user' . "tidak diatur";
}
?>