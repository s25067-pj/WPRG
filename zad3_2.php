<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Moja strona WWW</title>
</head>
<body>
<p>
<?php

function rzutKoscia($liczbaRzutow) {
	$wyniki = array();
	for ($i = 0; $i < $liczbaRzutow; $i++) {
		$oczka = rand(1,6);
		array_push($wyniki, $oczka);
	}
	return $wyniki;
}

if (isset($_POST['liczbaRzutow'])) {
        $liczbaRzutow = $_POST['liczbaRzutow'];
        $wyniki = rzutKoscia($liczbaRzutow);
        echo "Wyniki rzutów kością:";
        echo "<ul>";
        foreach ($wyniki as $wynik) {
            echo "<li>$wynik</li>";
        }
        echo "</ul>";
    } else {
        ?>
        <form method="post" action="">
            <label for="liczbaRzutow">Liczba rzutów kością:</label>
            <input type="text" id="liczbaRzutow" name="liczbaRzutow" required>
            <button type="submit">Losuj</button>
        </form>
        <?php
    }
?>
</p>
</body>
</html>

