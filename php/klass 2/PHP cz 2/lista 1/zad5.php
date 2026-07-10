<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Samogłoski</title>
</head>
<body>

<form method="post">
    Wpisz tekst:<br>
    <textarea name="tekst"></textarea><br><br>
    <input type="submit" value="Sprawdź">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tekst = strtolower($_POST["tekst"]);
    $samogloski = ['a','e','i','o','u','y','ą','ę'];
    $licznik = 0;

    for ($i = 0; $i < strlen($tekst); $i++) {
        if (in_array($tekst[$i], $samogloski)) {
            $licznik++;
        }
    }

    echo "Liczba samogłosek: " . $licznik;
}
?>

</body>
</html>