<!DOCTYPE html>
<html>
<head>
	<title>Pierwsza podstrona</title>
</head>
<body>
	<h1>Formularz</h1>
	<form action="zad1_2.php" method="post">
		<label for="nr_karty">Numer karty:</label>
		<input type="text" name="nr_karty" required><br>

		<label for="imie">Imię:</label>
		<input type="text" name="imie" required><br>

		<label for="nazwisko">Nazwisko:</label>
		<input type="text" name="nazwisko" required><br>

		<label for="ilosc_osob">Ilość osób:</label>
		<input type="number" name="ilosc_osob" min="1" required><br>

		<input type="submit" value="Dalej">
	</form>
</body>
</html>
