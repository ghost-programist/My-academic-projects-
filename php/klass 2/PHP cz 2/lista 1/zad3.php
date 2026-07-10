<?php
$oceny = [5, 4, 3, 5, 2, 4, 5, 3, 4, 5];

echo "Oceny: ";
foreach ($oceny as $ocena) {
    echo $ocena . " ";
}

$srednia = array_sum($oceny) / count($oceny);
$max = max($oceny);
$min = min($oceny);

echo "<br><br>Średnia: " . $srednia;
echo "<br>Najwyższa ocena: " . $max;
echo "<br>Najniższa ocena: " . $min;
?>