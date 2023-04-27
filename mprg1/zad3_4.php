<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liczba pierwsza</title>
</head>
<body>
 <?php

function liczbaPierwsza($liczba) {
        if($liczba < 2) {
                echo "Nie jest to liczba pierwsza";
        } elseif($liczba === 2) {
                echo "Jest to liczba pierwsza";
        } elseif($liczba % 2 === 0) {
                echo "Nie jest to liczba pierwsza";
        } else {
                for($i=3 ; $i<=$liczba/2 ; $i+=2) {
                        if ($liczba%$i===0) {
                                echo "Nie jest to liczba pierwsza";
                                return;
                        }
                }
                echo "Jest to liczba pierwsza";
        }
}

if (isset($_POST['liczba'])) {
        $liczba = $_POST['liczba'];
        liczbaPierwsza($liczba);
    } else {
        ?>
        <form method="post" action="">
            <label for="liczba">Podaj liczba:</label>
            <input type="text" id="liczba" name="liczba" required>
            <button type="submit" name="submit">Sprawdz</button>
        </form>
        <?php
    }
    ?>
</body>
</html>
