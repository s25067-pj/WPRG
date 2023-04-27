<!DOCTYPE html>
<html>
<head>
	<title>Moja strona z PHP</title>
</head>
<body>

<?php

	$plik = 'licznik.txt';

	if (!file_exists($plik)) {
	    file_put_contents($plik, '1');
	    $licznik=1;
	} else {
	$licznik = intval(file_get_contents($plik));
	$licznik++;
	file_put_contents($plik, strval($licznik));
	}
	echo "Liczba odwiedzin: " . $licznik;
?>

</body>
</html>
