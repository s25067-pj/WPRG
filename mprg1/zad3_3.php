<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tabliczka mnożenia</title>
</head>
<body>
<?php
function tabliczkaMnozenia($bok) {
    echo '<table>';
    for ($i = 1; $i <= $bok; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $bok; $j++) {
            echo '<td>' . $i * $j .'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

if (isset($_POST['bok'])) {
        $bok = $_POST['bok'];
        tabliczkaMnozenia($bok);
    } else {
        ?>
        <form method="post" action="">
            <label for="bok">Podaj bok:</label>
            <input type="number" id="bok" name="bok" required>
            <button type="submit">Generuj</button>
        </form>
        <?php
    }
    ?>
</body>
</html>
