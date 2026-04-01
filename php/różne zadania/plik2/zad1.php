<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zad 1</title>
</head>
<body>

<h2>Wpisz trzy liczby</h2>

<form method="post">
    liczba a: <input type="number" name="a" step="any" required><br><br>
    liczba b: <input type="number" name="b" step="any" required><br><br>
    liczba c: <input type="number" name="c" step="any" required><br><br>
    <input type="submit" value="Oblicz">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    


    if ($a == 0) {
        echo "W równaniu kwadratowym a nie powinno być równa 0 ";
    } else {
        $delta = $b * $b - 4 * $a * $c;
        echo "Delta = $delta<br>";

        if ($delta < 0) {
            echo "Brak rozwiązań rzeczywistych.";
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            echo "x = $x";
        } else {
            $x1 = (-$b - sqrt($delta)) / (2 * $a);
            $x2 = (-$b + sqrt($delta)) / (2 * $a);
            echo "Sa dwa rozwiązania:<br>";
            echo "x1 = $x1<br>";
            echo "x2 = $x2";
        }
    }
}
?>

</body>
</html>
