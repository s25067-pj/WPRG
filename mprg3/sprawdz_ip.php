<?php

$allowed_ips = array('192.168.0.1', '10.0.0.2');

$user_ip = $_SERVER['REMOTE_ADDR'];

if (in_array($user_ip, $allowed_ips)) {
    include('strona_dla_uprawnionych.html');
} else {
    echo "Brak dostępu do tej strony.";
}

?>
