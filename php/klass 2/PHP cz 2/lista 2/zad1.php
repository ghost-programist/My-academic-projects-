<?php
$plik = "licznik.txt";


if (!file_exists($plik)) {
    file_put_contents($plik, 0);
}


$licznik = file_get_contents($plik);

$licznik++;


file_put_contents($plik, $licznik);


echo "Liczba odwiedzin: " . $licznik;
?>