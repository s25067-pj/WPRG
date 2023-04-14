<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Rezerwacja hotelu</title>
  </head>
  <body>

<?php

$iloscOsob = $_POST['iloscOsob'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$adres = $_POST['adres'];
$nrKarty = $_POST['nrKarty'];
$dataWaznosciKarty = $_POST['dataWaznosciKarty'];
$kodCVV = $_POST['kodCVV'];
$email = $_POST['email'];
$dataPrzyjazdu = $_POST['dataPrzyjazdu'];
$dataWyjazdu = $_POST['dataWyjazdu'];
$godzinaPrzyjazdu = $_POST['godzinaPrzyjazdu'];
$dostawka = $_POST['dostawka'];
$udogodnienia = $_POST['udogodnienia'];

if (empty($iloscOsob) || empty($imie) || empty($nazwisko) || empty($nrKarty) || empty($dataWaznosciKarty) || empty($kodCVV) || empty($email) || empty($dataPrzyjazdu) || empty($dataWyjazdu)) {
    echo "Wypełnij wszystkie pola oznaczone gwiazdką(*)!";
	
?>
<br><br>
<form action="" method="post">

  <label for="iloscOsob">Podaj ilosc osób* : </label>
  <select name="iloscOsob" id="IloscOsob">
	<option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
  </select><br><br>
  <label for="imie">Imie* : </label>
	<input type="text" name="imie" id="imie"><br><br>
  <label for="nazwisko">Nazwisko* : </label>
        <input type="text" name="nazwisko" id="nazwisko"><br><br>
  <label for="adres">Adres : </label>
        <input type="text" name="adres" id="adres"><br><br>
  <label for="nrKarty">Numer karty kredytowej* : </label>
        <input type="text" name="nrKarty" id="nrKarty"><br><br>
  <label for="dataWaznosciKarty">Data ważności karty* : </label>
        <input type="text" name="dataWaznosciKarty" id="dataWaznosciKarty"><br><br>
  <label for="kodCVV">Kod CVV* : </label>
        <input type="text" name="kodCVV" id="kodCVV"><br><br>
  <label for="email">E-mail* : </label>
        <input type="email" name="email" id="email"><br><br>
  <label for="dataPrzyjazdu">Data przyjazdu* : </label>
        <input type="date" name="dataPrzyjazdu" id="dataPrzyjazdu"><br><br>
  <label for="dataWyjazdu">Data wyjazdu* : </label>
        <input type="date" name="dataWyjazdu" id="dataWyjazdu"><br><br>
  <label for="godzinaPrzyjazdu">Godzina przyjazdu : </label>
        <input type="time" name="godzinaPrzyjazdu" id="godzinaPrzyjazdu"><br><br>
  <label for="dostawka">Czy jest potrzeba dostawienia łóżka dla dziecka? : </label>
  <select name="dostawka" id="dostawka">
	<option value="-">-</option>
        <option value="tak">TAK</option>
        <option value="nie">NIE</option>
  </select><br><br>
  <label for="udogodnienia">Dodatkowe udogodnienia : </lab>
  <select name="udogodnienia" id="udogodnienia">
        <option value="-">-</option>
        <option value="klimatyzacja">klimatyzacja</option>
        <option value="popielniczka">popielniczka</option>
  </select><br><br>
 <button type="submit" name="submit">Zarezerwuj!</button>

<?php
} else {
echo "<h2>Podsumowanie rezerwacji:</h2>";
    echo "<p>Ilość osób: " . $iloscOsob . "</p>";
    echo "<p>Imię: " . $imie . "</p>";
    echo "<p>Nazwisko: " . $nazwisko . "</p>";
    echo "<p>Adres: " . ($adres ? $adres : "-") . "</p>";
    echo "<p>Numer karty kredytowej: " . $nrKarty . "</p>";
    echo "<p>Data ważności karty: " . $dataWaznosciKarty . "</p>";
    echo "<p>Kod CVV: " . $kodCVV . "</p>";
    echo "<p>E-mail: " . $email . "</p>";
    echo "<p>Data przyjazdu: " . $dataPrzyjazdu . "</p>";
    echo "<p>Data wyjazdu: " . $dataWyjazdu . "</p>";
    echo "<p>Godzina przyjazdu: " . ($godzinaPrzyjazdu ? $godzinaPrzyjazdu : "-") . "</p>";
    echo "<p>Potrzeba dostawienia łóżka dla dziecka: " . ($dostawka == "tak" ? "TAK" : "-") . "</p>";
    echo "<p>Dodatkowe udogodnienia: " . ($udogodnienia != "-" ? $udogodnienia : "-") . "</p>";
}
?>

</body>
</html>
