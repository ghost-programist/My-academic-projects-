<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tablica</title>
</head>
<body>

<?php

$liczby = [];

for($i = 0; $i < 8; $i++){
    $liczby[] = rand(1,100);
}

echo "Wylosowane liczby:<br>";

foreach($liczby as $liczba){
    echo $liczba . "<br>";
}

$ilosc = count($liczby);

echo "<br>Liczba elementów: " . $ilosc;

?>

</body>
</html>