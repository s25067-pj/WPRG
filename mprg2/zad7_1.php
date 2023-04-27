<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Prosty kalkulator</title>
  </head>
  <body>
    <?php
      $liczba1 = $_POST['liczba1'];
      $liczba2 = $_POST['liczba2'];
      $dzialanie = $_POST['dzialanie'];

      function oblicz($liczba1, $liczba2, $dzialanie) {
        switch ($dzialanie) {
          case 'dodawanie':
            $wynik = $liczba1 + $liczba2;
            echo "Wynik dodawania: $wynik";
            break;
          case 'odejmowanie':
            $wynik = $liczba1 - $liczba2;
            echo "Wynik odejmowania: $wynik";
            break;
          case 'mnozenie':
            $wynik = $liczba1 * $liczba2;
            echo "Wynik mnożenia: $wynik";
            break;
          case 'dzielenie':
            if ($liczba2 == 0) {
              echo "Nie można dzielić przez zero!";
            } else {
              $wynik = $liczba1 / $liczba2;
              echo "Wynik dzielenia: $wynik";
            }
            break;
          default:
            echo "Nieznane działanie!";
        }
      }

      if (isset($_POST['liczba1']) && isset($_POST['liczba2']) && isset($_POST['dzialanie'])) {
        $liczba1 = $_POST['liczba1'];
        $liczba2 = $_POST['liczba2'];
        $dzialanie = $_POST['dzialanie'];
        oblicz($liczba1, $liczba2, $dzialanie);
      } else {
    ?>
    <form action="" method="post">
      <label for="liczba1">Liczba 1:</label>
      <input type="number" name="liczba1" id="liczba1"><br><br>
      <label for="liczba2">Liczba 2:</label>
      <input type="number" name="liczba2" id="liczba2"><br><br>
      <label for="dzialanie">Działanie:</label>
      <select name="dzialanie" id="dzialanie">
        <option value="dodawanie">Dodawanie</option>
        <option value="odejmowanie">Odejmowanie</option>
        <option value="mnozenie">Mnożenie</option>
        <option value="dzielenie">Dzielenie</option>
      </select><br><br>
      <input type="submit" value="Oblicz">
    </form>
    <?php
      }
    ?>
  </body>
</html>
