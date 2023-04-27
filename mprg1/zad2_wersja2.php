<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Moja strona WWW</title>
</head>
<body>
<p>
<?php
function srednica($ramie) {
  $wynik = 2 * $ramie;
  return $wynik;
}

if (isset($_POST['ramie'])) {
  $ramie = $_POST['ramie'];
  $srednica = srednica($ramie);
  echo "Średnica koła o promieniu " . $ramie . " wynosi " . $srednica . ".";
} else {
?>
  <form method="post" action="">
    <label for="ramie">Wpisz promień koła:</label>
    <input type="text" id="ramie" name="ramie" required>
    <button type="submit">Oblicz</button>
  </form>
<?php
}
?>
</p>
</body>
</html>
