<?php

$cookie_name = "visits";
$cookie_expire = time() + 60*60*24;

if(!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, 1, $cookie_expire);
    $count = 1;
} else {
    $count = $_COOKIE[$cookie_name];
}

if(!isset($_COOKIE['refresh'])) {
    setcookie($cookie_name, ++$count, $cookie_expire);
    setcookie('refresh', 'true');
}

?>
