<!DOCTYPE html>
<html>
<head>
	<title>Formularz</title>
</head>
<body>

<?php

function wykonaj_operacje($sciezka, $nazwa_katalogu, $typ_operacji = "read") {

    if (substr($sciezka, -1) != "/") {
        $sciezka .= "/";
    }

    if (!file_exists($sciezka)) {
        return "Katalog nie istnieje.";
    }

    if ($typ_operacji == "delete" && count(scandir($sciezka . $nazwa_katalogu)) > 2) {
        return "Katalog nie jest pusty.";
    }

    switch ($typ_operacji) {
        case "delete":
            rmdir($sciezka . $nazwa_katalogu);
            return "Katalog usunięty.";
        case "create":
            mkdir($sciezka . $nazwa_katalogu);
            return "Katalog utworzony.";
        default:
            return implode("<br>", scandir($sciezka . $nazwa_katalogu));
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sciezka = $_POST["sciezka"];
    $nazwa_katalogu = $_POST["nazwa_katalogu"];
    $typ_operacji = $_POST["typ_operacji"];
    $wynik = wykonaj_operacje($sciezka, $nazwa_katalogu, $typ_operacji);
    echo $wynik;
} else {
?>


	<form method="POST" action="">
		<label>Ścieżka:</label><br>
		<input type="text" name="sciezka"><br>
		<label>Nazwa katalogu:</label><br>
		<input type="text" name="nazwa_katalogu"><br>
		<label>Typ operacji:</label><br>
		<select name="typ_operacji">
			<option value="read">Odczyt</option>
			<option value="delete">Usunięcie</option>
			<option value="create">Stworzenie</option>
		</select><br><br>
		<input type="submit" value="Wykonaj">
	</form>
<?php
}
?>
</body>
</html>
