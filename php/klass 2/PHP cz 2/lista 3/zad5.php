<?php
$wyniki = [
    "Anna" => 120,
    "Jan" => 95,
    "Kasia" => 140,
    "Piotr" => 110
];

arsort($wyniki); 

$miejsce = 1;

foreach($wyniki as $imie => $punkty){
    echo $miejsce . ". $imie - $punkty<br>";
    $miejsce++;
}
?>