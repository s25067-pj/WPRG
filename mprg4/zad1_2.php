<?php
	session_start();

	$nr_karty = $_POST['nr_karty'];
	$imie = $_POST['imie'];
	$nazwisko = $_POST['nazwisko'];
	$ilosc_osob = $_POST['ilosc_osob'];

	$_SESSION['nr_karty'] = $nr_karty;
	$_SESSION['imie'] = $imie;
	$_SESSION['nazwisko'] = $nazwisko;
	$_SESSION['ilosc_osob'] = $ilosc_osob;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Druga podstrona</title>
</head>
<body>
	<h1>Podaj dane dla <?php echo $ilosc_osob; ?> osób</h1>
	<form action="zad1_3.php" method="post">
		<?php
			for ($i = 1; $i <= $ilosc_osob; $i++) {
				echo '<h2>Osoba '.$i.'</h2>';
				echo '<label for="imie_'.$i.'">Imię:</label>';
				echo '<input type="text" name="imie_'.$i.'" required><br>';

				echo '<label for="nazwisko_'.$i.'">Nazwisko:</label>';
				echo '<input type="text" name="nazwisko_'.$i.'" required><br>';
			}
		?>

		<input type="submit" value="Dalej">
		<input type="button" value="Powrót" onclick="window.location.href='pierwsza_podstrona.php'">
	</form>
</body>
</html>
