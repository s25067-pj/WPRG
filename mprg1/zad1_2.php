<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; cgarset=utf-8">
<title>Moja strona WWW</title>
</head>
<body>
<p>
<?php
function srednica($ramie) {
  $wynik = 2 * $ramie;
  return $wynik;
}

$ramie = 10;

echo "Srednica kola o promieniu: " .$ramie. " wynosi: " . srednica($ramie). ".";
?>
</p>
</body>
</html>
