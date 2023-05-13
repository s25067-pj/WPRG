<?php
	session_start();

	$nr_karty = $_SESSION['nr_karty'];
	$imie = $_SESSION['imie'];
	$nazwisko = $_SESSION['nazwisko'];
	$ilosc_osob = $_SESSION['ilosc_osob'];

	for ($i = 1; $i <= $ilosc_osob; $i++) {
		$imie_osoby[$i] = $_POST['imie_'.$i];
		$nazwisko_osoby[$i] = $_POST['nazwisko_'.$i];
	}

	echo '<h1>Podsumowanie</h1>';
	echo '<h2>Dane ogólne</h2>';
	echo '<p>Numer karty: '.$nr_karty.'</p>';
	echo '<p>Imię: '.$imie.'</p>';
	echo '<p>Nazwisko: '.$nazwisko.'</p>';
	echo '<p>Ilość osób: '.$ilosc_osob.'</p>';

	echo '<h2>Dane osobowe</h2>';
	echo '<table>';
	echo '<tr><th>Lp.</th><th>Imię</th><th>Nazwisko</th></tr>';

	for ($i = 1; $i <= $ilosc_osob; $i++) {
		echo '<tr>';
		echo '<td>'.$i.'</td>';
		echo '<td>'.$imie_osoby[$i].'</td>';
		echo '<td>'.$nazwisko_osoby[$i].'</td>';
		echo '</tr>';
	}

	echo '</table>';

	session_unset();
	session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Trzecia podstrona</title>
</head>
<body>
	<form action="zad1_1.php">
		<input type="submit" value="Powrót do formularza">
	</form>
</body>
</html>
