<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dodaj ucznia</title>
</head>
<body>

<h2>Dodaj ucznia</h2>

<form method="post">
    Imię: <input type="text" name="imie" required><br><br>
    Nazwisko: <input type="text" name="nazwisko" required><br><br>
    Klasa: <input type="text" name="klasa" required><br><br>
    <input type="submit" value="Dodaj">
</form>

<?php
$conn = new mysqli("localhost", "root", "", "szkola");

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $klasa = $_POST["klasa"];

    $sql = "INSERT INTO uczniowie (imie, nazwisko, klasa)
            VALUES ('$imie', '$nazwisko', '$klasa')";

    if ($conn->query($sql) === TRUE) {
        echo "<p><b>Uczeń został dodany</b></p>";
    } else {
        echo "<p>Błąd: " . $conn->error . "</p>";
    }
}

$conn->close();
?>

</body>
</html>