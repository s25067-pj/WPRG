<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Rezerwacja hotelu</title>
  </head>
  <body>

    <?php

      $iloscOsob = isset($_POST['iloscOsob']) ? $_POST['iloscOsob'] : null;
      $imie = isset($_POST['imie']) ? $_POST['imie'] : null;
      $nazwisko = isset($_POST['nazwisko']) ? $_POST['nazwisko'] : null;
      $adres = isset($_POST['adres']) ? $_POST['adres'] : null;
      $nrKarty = isset($_POST['nrKarty']) ? $_POST['nrKarty'] : null;
      $dataWaznosciKarty = isset($_POST['dataWaznosciKarty']) ? $_POST['dataWaznosciKarty'] : null;
      $kodCVV = isset($_POST['kodCVV']) ? $_POST['kodCVV'] : null;
      $email = isset($_POST['email']) ? $_POST['email'] : null;
      $dataPrzyjazdu = isset($_POST['dataPrzyjazdu']) ? $_POST['dataPrzyjazdu'] : null;
      $dataWyjazdu = isset($_POST['dataWyjazdu']) ? $_POST['dataWyjazdu'] : null;
      $godzinaPrzyjazdu = isset($_POST['godzinaPrzyjazdu']) ? $_POST['godzinaPrzyjazdu'] : null;
      $dostawka = isset($_POST['dostawka']) ? $_POST['dostawka'] : null;
      $udogodnienia = isset($_POST['udogodnienia']) ? $_POST['udogodnienia'] : null;

      if (empty($iloscOsob) || empty($imie) || empty($nazwisko) || empty($nrKarty) || empty($dataWaznosciKarty) || empty($kodCVV) || empty($email) || empty($dataPrzyjazdu) || empty($dataWyjazdu) || empty($godzinaPrzyjazdu)) {
        echo "Wypełnij wszystkie pola oznaczone gwiazdką(*)!";
      }
    ?>
    <br><br>
    <form action="" method="post">

      <label for="iloscOsob">Podaj ilosc osób* : </label>
      <select name="iloscOsob" id="IloscOsob" onchange="this.form.submit()">
        <option value="1" <?php if($iloscOsob == 1) echo 'selected'; ?>>1</option>
        <option value="2" <?php if($iloscOsob == 2) echo 'selected'; ?>>2</option>
        <option value="3" <?php if($iloscOsob == 3) echo 'selected'; ?>>3</option>
        <option value="4" <?php if($iloscOsob == 4) echo 'selected'; ?>>4</option>
      </select><br><br>

      <?php
        if(isset($_POST['iloscOsob'])) {
          switch($iloscOsob) {
            case '2':
              echo '<label for="imie2">Imie drugiej osoby: </label>
	  	    <input type="text" id="imie2" name="imie2">';
		break;
	   case '3':
              echo '<label for="imie2">Imie drugiej osoby* : </label>
                        <input type="text" name="imie2" id="imie2"><br><br>
                        <label for="nazwisko2">Nazwisko drugiej osoby* : </label>
                        <input type="text" name="nazwisko2" id="nazwisko2"><br><br>
                        <label for="imie3">Imie trzeciej osoby* : </label>
                        <input type="type" name="imie3" id="imie3"><br><br>
                        <label for="nazwisko3">Nazwisko trzeciej osoby* : </label>
                        <input type="text" name="nazwisko3" id="nazwisko3"><br><br>';
		break;
	   case '4':
	     echo '<label for="imie2">Imie drugiej osoby* : </label>
                        <input type="text" name="imie2" id="imie2"><br><br>
                        <label for="nazwisko2">Nazwisko drugiej osoby* : </label>
                        <input type="text" name="nazwisko2" id="nazwisko2"><br><br>
                        <label for="imie3">Imie trzeciej osoby* : </label>
                        <input type="type" name="imie3" id="imie3"><br><br>
                        <label for="nazwisko3">Nazwisko trzeciej osoby* : </label>
                        <input type="text" name="nazwisko3" id="nazwisko3"><br><br>
                        <label for="imie4">Imie czwartej osoby* : </label>
                        <input type="type" name="imie4" id="imie4"><br><br>
                        <label for="nazwisko4">Nazwisko czwartej osoby* : </label>
                        <input type="text" name="nazwisko4" id="nazwisko4"><br><br>';
		break;
         }
       }
   ?>

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
    echo "<p>Godzina przyjazdu: " . ($godzinaPrzyjazdu ? $godzinaPrzyjazdu : "-") . "</p>>
    echo "<p>Potrzeba dostawienia łóżka dla dziecka: " . ($dostawka == "tak" ? "TAK" : "->
    echo "<p>Dodatkowe udogodnienia: " . ($udogodnienia != "-" ? $udogodnienia : "-") . ">
}
?>

</body>
</html>

























