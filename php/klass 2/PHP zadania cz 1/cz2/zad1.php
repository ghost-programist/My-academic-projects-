<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Klasa</title>
</head>
<body>

<h2>Lista uczniów</h2>

<?php

$uczniowie = [
    "Oleksandr",
    "Michajlo",
    "Sasza",
    "Oleksij",
    "Michał",
    "Ivan",
    "Alina",
    "Nastia",
    "Artem",
    "Anastasia"

];

echo "<ul>";

foreach($uczniowie as $osoba){
    echo "<li>$osoba</li>";
}

echo "</ul>";

?>

</body>
</html>