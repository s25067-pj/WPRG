<!DOCTYPE html>
<html>
  <head>
    <title>Odwracanie kolejności wierszy w pliku tekstowym</title>
  </head>
  <body>

<?php
if(isset($_FILES['plik'])) {
  // odczytaj nazwę pliku przesłanego przez formularz
  $nazwa_pliku = $_FILES['plik']['name'];

  // odczytaj zawartość pliku
  $zawartosc = file_get_contents($nazwa_pliku);

  // podziel zawartość na wiersze
  $wiersze = explode("\n", $zawartosc);

  // odwróć kolejność wierszy
  $odwrocone_wiersze = array_reverse($wiersze);

  // połącz wiersze z powrotem w jedną ciągłą zawartość pliku
  $odwrocona_zawartosc = implode("\n", $odwrocone_wiersze);

  // zapisz odwróconą zawartość do pliku
  file_put_contents($nazwa_pliku, $odwrocona_zawartosc);

  // wyświetl odwróconą zawartość pliku
  echo "Odwrócona zawartość pliku:";
  echo "<pre>" . htmlspecialchars($odwrocona_zawartosc) . "</pre>";

} else {
?>

    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data">
      Wybierz plik do odczytu: <input type="file" name="plik"><br>
      <input type="submit" value="Odwórz">
    </form>
<?php
}
?>
  </body>
</html>

