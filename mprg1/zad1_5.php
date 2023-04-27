<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Kalkulator powierzchni</title>
</head>
<body>
<p>
<?php
function poleTrojkata() {
    if(isset($_POST['base']) && isset($_POST['height'])) {
        $base = $_POST['base'];
        $height = $_POST['height'];
        $pole = 0.5 * $base * $height;
        echo "<p>Pole trójkąta wynosi: ".$pole."</p>";
    } else {
        echo '<form method="post">
                <label for="base">Podaj długość podstawy:</label>
                <input type="text" id="base" name="base" required>
                <label for="height">Podaj wysokość:</label>
                <input type="text" id="height" name="height" required>
                <button type="submit">Oblicz pole trójkąta</button>
              </form>';
    }
}

function poleProstokata() {
    if(isset($_POST['width']) && isset($_POST['height'])) {
        $width = $_POST['width'];
        $height = $_POST['height'];
        $pole = $width * $height;
        echo "<p>Pole prostokąta wynosi: ".$pole."</p>";
    } else {
        echo '<form method="post">
                <label for="width">Podaj długość boku:</label>
                <input type="text" id="width" name="width" required>
                <label for="height">Podaj długość drugiego boku:</label>
                <input type="text" id="height" name="height" required>
                <button type="submit">Oblicz pole prostokąta</button>
              </form>';
    }
}

function poleTrapezu() {
    if(isset($_POST['base1']) && isset($_POST['base2']) && isset($_POST['height'])) {
        $base1 = $_POST['base1'];
        $base2 = $_POST['base2'];
        $height = $_POST['height'];
        $pole = 0.5 * ($base1 + $base2) * $height;
        echo "<p>Pole trapezu wynosi: ".$pole."</p>";
    } else {
        echo '<form method="post">
                <label for="base1">Podaj długość pierwszej podstawy:</label>
                <input type="text" id="base1" name="base1" required>
                <label for="base2">Podaj długość drugiej podstawy:</label>
                <input type="text" id="base2" name="base2" required>
                <label for="height">Podaj wysokość:</label>
                <input type="text" id="height" name="height" required>
                <button type="submit">Oblicz pole trapezu</button>
              </form>';
    }
}

if(isset($_POST['figure'])) {
    $figure = $_POST['figure'];
    switch ($figure) {
        case 'trojkat':
            poleTrojkata();
            break;
        case 'prostokat':
            poleProstokata();
            break;
        case 'trapez':
            poleTrapezu();
            break;
        default:
            echo "Nieznana figura";
    }
} else {
?>
    <form method="post" action="">
        <label for="figure">Podaj figure:</label>
    	<input type="text" id="figure" name="figure" required>
    	<button type="submit">Oblicz pole powierzchni figury</button>
  </form>
<?php
}
?>
</p>
</body>
</html>

