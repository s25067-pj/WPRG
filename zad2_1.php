<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Moja strona WWW</title>
</head>
<body>
<p>
<?php
function randomNumber($index) {
 $array = array();
 for ($i = 0; $i < 100; $i++) {
	$array[] = rand(1,100);
 }
 return $array[$index];
}

if (isset($_POST['index'])) {
	$index = $_POST['index'];
	$random = randomNumber($index);
	echo "Twoja liczba to: ". $random;
} else {
	?>
	<form method="post" action="">
    	<label for="index">Wpisz liczbe:</label>
    	<input type="text" id="index" name="index" required>
    	<button type="submit">Press</button>
  	</form>
<?php
}
?>
</p>
</body>
</html>

