<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
</head>
<body>

<form method="post">
    Liczba 1: <input type="number" name="liczba1" required><br><br>
    Liczba 2: <input type="number" name="liczba2" required><br><br>

    Działanie:
    <select name="dzialanie">
        <option value="dodawanie">Dodawanie</option>
        <option value="odejmowanie">Odejmowanie</option>
        <option value="mnozenie">Mnożenie</option>
        <option value="dzielenie">Dzielenie</option>
    </select><br><br>

    <input type="submit" value="Oblicz">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["liczba1"];
    $b = $_POST["liczba2"];
    $dzialanie = $_POST["dzialanie"];

    if ($dzialanie == "dzielenie" && $b == 0) {
        echo "Nie można dzielić przez 0";
    } else {
        switch ($dzialanie) {
            case "dodawanie":
                $wynik = $a + $b;
                break;
            case "odejmowanie":
                $wynik = $a - $b;
                break;
            case "mnozenie":
                $wynik = $a * $b;
                break;
            case "dzielenie":
                $wynik = $a / $b;
                break;
        }
        echo "Wynik działania: " . $wynik;
    }
}
?>

</body>
</html>