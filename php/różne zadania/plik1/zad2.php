
<?php
define('kwota_wolna', 2440);
define('stawka_procentowa', 0.25); 
$dochód = 5000;

if ($dochód <= kwota_wolna) {
    $podatek = 0;
} else {
    $podatek = ($dochód - kwota_wolna) * stawka_procentowa;
}

echo "Podatek od  " . $dochód . " zł wynosi: " . number_format($podatek, 2) . " zł<br>";
?>
