<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Program do cenzurowania</title>
</head>
<body>
<p>
<?php
function ocenzuruj($zdanie) {
   $niepozadane_slowa = array('brukselki', 'oliwki', 'kapary');

  foreach ($niepozadane_slowa as $slowo) {
    $gdzie = strpos($zdanie, $slowo);
    if ($gdzie !== false) {
      $ile = strlen($slowo);
      $gwiazdki = str_repeat('*', $ile);
      $zdanie = substr_replace($zdanie, $gwiazdki, $gdzie, $ile);
    }
  }
   return $zdanie;
}

if (isset($_POST['zdanie'])) {

  $zdanie = $_POST['zdanie'];
  $ocenzuruj = ocenzuruj($zdanie);
  echo $ocenzuruj;
} else {
?>
  <form method="post" action="">
    <label for="zdanie">Wpisz zdanie:</label>
    <input type="text" id="zdanie" name="zdanie" required>
    <button type="submit">Ocenzuruj</button>
  </form>
<?php
}
?>
</p>
</body>
</html>
