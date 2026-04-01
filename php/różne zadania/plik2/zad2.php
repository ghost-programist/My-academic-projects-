<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zad 2</title>
</head>
<body>

<h2>BMI</h2>

<form method="post">
    Waga (kg): <input type="number" name="waga" step="any" required><br><br>
    Wzrost (cm): <input type="number" name="wzrost" step="any" required><br><br>
    <input type="submit" value="Oblicz BMI">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $waga = $_POST["waga"];
    $wzrost = $_POST["wzrost"];

    if ($waga <= 0 || $wzrost <= 0) {
        echo "<h3>Waga i wzrost muszą być liczbami dodatnimi.</h3>";
       
    }

    $wzrost_m = $wzrost / 100;

    $bmi = $waga / ($wzrost_m * $wzrost_m);
    


    if ($bmi < 16) $kategoria = "Wygłodzenie";
    elseif ($bmi > 16 && $bmi < 17) $kategoria = "Wychudzenie";
    elseif ($bmi > 17 && $bmi < 18.49) $kategoria = "Niedowaga";
    elseif ($bmi > 18.5 && $bmi < 24.99) $kategoria = "Optimum";
    elseif ($bmi > 25 && $bmi < 29) $kategoria = "Nadwaga";
    elseif ($bmi > 30 && $bmi < 34.99) $kategoria = "Otyłość I stopnia";
    elseif ($bmi > 35 && $bmi < 39.99) $kategoria = "Otyłość II stopnia";
    else $kategoria = "Otyłość III stopnia";

    echo "<h3>Twoje BMI: $bmi</h3>";
    echo "<h3>Kategoria: $kategoria</h3>";
}
?>

</body>
</html>
