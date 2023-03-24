<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Moja strona WWW</title>
</head>
<body>
<p>
<?php

$kraje = array(
    "Polska" => "Polak",
    "Niemcy" => "Niemiec",
    "Francja" => "Francuz",
    "Włochy" => "Włoch",
    "Hiszpania" => "Hiszpan",
    "Portugalia" => "Portugalczyk"
);

if(isset($_POST['kraj'])){
    $kraj = $_POST['kraj'];
    if(array_key_exists($kraj, $kraje)){
        $narodowosc = $kraje[$kraj];
        echo "Twoja narodowość to: " . $narodowosc;
    } else {
        echo "Nie znaleziono kraju o nazwie " . $kraj;
      }
} else {
?>

	<form method="post">	
    	<label for="kraj">Podaj nazwę kraju:</label>
    	<input type="text" name="kraj" id="kraj">
    	<input type="submit" value="Sprawdź narodowosc">
	</form>
<?php
}
?>
</p>
</body>
</html>
