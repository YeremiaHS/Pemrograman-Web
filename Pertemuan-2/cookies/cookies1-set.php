<?php
$cookie_name = "user";
$cookie_value = "Admin";
setcookie($cookie_name, $cookie_value, time() + 2400, "/");

if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie " . $cookie_name . " telah diatur! <br/>";
    echo "Nilainya adalah " . $_COOKIE[$cookie_name];
} else {
    echo "nama cookie " . $cookie_name . " tidak diatur";
}
?>