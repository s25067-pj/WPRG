<!DOCTYPE html>
<html>
  <head>
    <title>Odwracanie kolejności wierszy w pliku tekstowym</title>
  </head>
  <body>

<?php
if(isset($_FILES['plik'])) {
  $nazwa_pliku = $_FILES['plik']['name'];

  $zawartosc = file_get_contents($nazwa_pliku);

  $wiersze = explode("\n", $zawartosc);

  $odwrocone_wiersze = array_reverse($wiersze);

  $odwrocona_zawartosc = implode("\n", $odwrocone_wiersze);

  file_put_contents($nazwa_pliku, $odwrocona_zawartosc);

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

