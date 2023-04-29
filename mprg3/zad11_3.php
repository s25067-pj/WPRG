<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista odnośników</title>
</head>
<body>
    <ul>
    <?php

        $filename = 'adresy.txt';
        $file = fopen($filename, 'r');

        while (!feof($file)) {
            $line = fgets($file);
            $parts = explode(';', $line);
            $url = trim($parts[0]);
            $label = trim($parts[1]);

            echo '<li><a href="' . $url . '">' . $label . '</a></li>';
        }

        fclose($file);
    ?>
    </ul>
</body>
</html>
