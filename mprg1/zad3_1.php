<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Moja strona WWW</title>
</head>
<body>
<p>
<?php

function max_array_for($arr) {
  $max = $arr[0];
  $len = count($arr);
  for ($i = 1; $i < $len; $i++) {
    if ($arr[$i] > $max) {
      $max = $arr[$i];
    }
  }
  return $max;
}


function max_array_while($arr) {
  $max1 = $arr[0];
  $len = count($arr);
  $i = 1;
  while ($i < $len) {
    if ($arr[$i] > $max1) {
      $max1 = $arr[$i];
    }
    $i++;
  }
  return $max1;
}

function max_array_do_while($arr) {
  $max2 = $arr[0];
  $len = count($arr);
  $i = 1;
  do {
    if ($arr[$i] > $max2) {
      $max2 = $arr[$i];
    }
    $i++;
  } while ($i < $len);
  return $max2;
}

function max_array_foreach($arr) {
  $max3 = $arr[0];
  foreach ($arr as $value) {
    if ($value > $max3) {
      $max3 = $value;
    }
  }
  return $max3;
}

$arr = array();
for ($i = 0; $i < 10; $i++) {
	$arr[] = rand(1, 100);
	echo $arr[$i]." ";
}

echo "<br>";
echo "Najwieksza wartosc (petla for): " . max_array_for($arr);
echo "<br>";
echo "Najwieksza wartosc (petla while): " . max_array_while($arr);
echo "<br>";
echo "Najwieksza wartosc (petla do while): " . max_array_do_while($arr);
echo "<br>";
echo "Najwieksza wartosc (petla do foreach): " . max_array_foreach($arr);


?>
</p>
</body>
</html>
