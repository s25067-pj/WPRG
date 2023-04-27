<head>
<meta http-equiv="Content-Type" content="text/html; cgarset=utf-8">
<title>Moja strona WWW</title>
</head>
<body>
<p>
<?php
function rzutKoscia() {
   $oczka = 6;
  $wynik = rand(1, $oczka);
  return $wynik;
}

echo "Wynik rzutu kostką: " . rzutKoscia();
?>
</p>
</body>
</html>
