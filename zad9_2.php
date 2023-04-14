<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } else if ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

function factorial_iterative($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

function fibonacci_iterative($n) {
    if ($n == 0) {
        return 0;
    } else if ($n == 1) {
        return 1;
    } else {
        $a = 0;
        $b = 1;
        for ($i = 2; $i <= $n; $i++) {
            $temp = $b;
            $b = $a + $b;
            $a = $temp;
        }
        return $b;
    }
}

if(isset($_POST['liczba'])) {
        $liczba=$_POST['liczba'];

	$start = microtime(true);
    	factorial($liczba);
    	$end = microtime(true);
    	$time = $end - $start;
    	echo "Silnia rekurencyjnie: czas = " . $time . " s<br>";

        $start1 = microtime(true);
        fibonacci($liczba);
        $end1 = microtime(true);
        $time1 = $end1 - $start1;
        echo "Fibonacci rekurencyjnie: czas = " . $time1 . " s<br>";

        $start2 = microtime(true);
        factorial_iterative($liczba);
        $end1 = microtime(true);
        $time2 = $end2 - $start2;
        echo "Silnie nierekurencyjnie: czas = " . $time2 . " s<br>";

        $start3 = microtime(true);
        fibonacci_iterative($liczba);
        $end1 = microtime(true);
        $time3 = $end3 - $start3;
        echo "Fibonacci rekurencyjnie: czas = " . $time3 . " s<br>";


} else {
?>

  <form method="post" action="">
    <label for="liczba">Podaj liczbe:</label>
        <input type="text" id="liczba" name="liczba" required>
        <button type="submit" name="submit">Sprawdz</button>
    </form>
    <?php
}
?>
</body>
</html>

