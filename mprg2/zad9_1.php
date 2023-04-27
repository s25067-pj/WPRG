<!DOCTYPE html>
<html>
<head>
	<title>Formularz daty urodzenia</title>
</head>
<body>

<?php
if(isset($_GET['dataUrodzenia'])) {
	$dataUrodzenia = $_GET['dataUrodzenia'];

	$dzienTygodnia = date('l', strtotime($dataUrodzenia));

	$iloscLat = date_diff(date_create($dataUrodzenia), date_create('today'))->y;

	$urodzinyWtymRoku = date_create(date('Y').'-'.date('m-d', strtotime($dataUrodzenia)));
	if(date_format($urodzinyWtymRoku, 'U') < date_create('today')->format('U')) {
		$urodzinyWtymRoku->modify('+1 year');
	}
	$dniDoUrodzin = date_diff(date_create('today'), $urodzinyWtymRoku)->days;

	echo "Urodziłeś/aś się w dniu: ".$dzienTygodnia."<br>";
	echo "Masz teraz ".$iloscLat." lat<br>";
	echo "Do najbliższych urodzin pozostało ".$dniDoUrodzin." dni";
} else {
	?>
	<form method="GET" action="">
		<label for="dataUrodzenia">Podaj datę urodzenia:</label>
		<input type="date" id="dataUrodzenia" name="dataUrodzenia">
		<button type="submit">Oblicz</button>
	</form>
	<?php
}
?>
</body>
</html>


