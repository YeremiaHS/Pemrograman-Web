<?php
$cookie_name = "user";
$cookie_value = "User";
setcookie($cookie_name, $cookie_value, time() +2400, "/");

if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie " . $cookie_name . " telah diatur! <br/>";
    echo "Nilainya adalah " . $_COOKIE[$cookie_name];
} else {
    echo "Nama cookies " . $cookie_name . "tidak diatur";
}
?>