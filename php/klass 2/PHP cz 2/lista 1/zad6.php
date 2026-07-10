<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Uczniowie</title>
</head>
<body>

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
        echo "<p>Uczeń został dodany</p>";
    } else {
        echo "<p>Błąd: " . $conn->error . "</p>";
    }
}
?>


<h2>Dodaj ucznia</h2>
<form method="post">
    Imię: <input type="text" name="imie" required><br><br>
    Nazwisko: <input type="text" name="nazwisko" required><br><br>
    Klasa: <input type="text" name="klasa" required><br><br>
    <input type="submit" value="Dodaj">
</form>

<hr>


<h2>Lista uczniów</h2>

<?php
$sql = "SELECT * FROM uczniowie";
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Imię</th>
<th>Nazwisko</th>
<th>Klasa</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['imie']}</td>
    <td>{$row['nazwisko']}</td>
    <td>{$row['klasa']}</td>
    </tr>";
}

echo "</table>";

$conn->close();
?>

</body>
</html>