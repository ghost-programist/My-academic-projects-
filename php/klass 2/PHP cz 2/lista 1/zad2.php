<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liczby parzyste</title>
</head>
<body>

<form method="post">
    Liczba początkowa: <input type="number" name="start" required><br><br>
    Liczba końcowa: <input type="number" name="end" required><br><br>
    <input type="submit" value="Pokaż">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start = $_POST["start"];
    $end = $_POST["end"];
    $suma = 0;

    echo "Liczby parzyste:<br>";

    for ($i = $start; $i <= $end; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
            $suma += $i;
        }
    }

    echo "<br><br>Suma: " . $suma;
}
?>

</body>
</html>