<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Pesel</title>
</head>
<body>
<p>
<?php
function wyczytajDate($pesel) {
$dzien = substr($pesel, 4, 2);
$miesiac = substr($pesel, 2, 2);
$rok = substr($pesel, 0, 2);

return $dzien . '-' . $miesiac . '-' . $rok;
}

if (isset($_POST['pesel'])) {

  $pesel = $_POST['pesel'];
  $dataUrodzin = wyczytajDate($pesel);
  echo $dataUrodzin;
} else {
?>
  <form method="post" action="">
    <label for="pesel">Podaj pesel:</label>
    <input type="text" id="pesel" name="pesel" required>
    <button type="submit">Podaj date urodzenia</button>
  </form>
<?php
}
?>
</p>
</body>
</html>
