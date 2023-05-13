<?php

$cookie_name = "visits";
$cookie_value = 1;
$cookie_expire = time() + 60*60*24; // 24h

if(isset($_COOKIE[$cookie_name])) {
    $cookie_value = $_COOKIE[$cookie_name];
    $cookie_value++;
}

setcookie($cookie_name, $cookie_value, $cookie_expire);

$count = $cookie_value;
?>

