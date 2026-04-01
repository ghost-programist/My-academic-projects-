<?php
$servername = "localhost";
$username = "root";   
$password = "";       
$dbname = "uzytkowniki";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}
echo "Połączono z bazą danych!";


$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Baza danych $dbname została utworzona.<br>";
} else {
    echo "Błąd tworzenia bazy danych: " . $conn->error;
}

$conn->select_db($dbname);




$sql = "CREATE TABLE IF NOT EXISTS usery (
    id INT AUTO_INCREMENT PRIMARY KEY,
    loginy VARCHAR(100),
    hasło VARCHAR(100),
    imię VARCHAR(100),
    nazwisko VARCHAR(100),
    email VARCHAR(100)

)";
$conn->query($sql);

echo "Tabele zostały utworzone.<br>";


$conn->query("INSERT INTO IF NOT EXISTS usery (loginy, hasło, imię, nazwisko, email)
VALUES 
('k.nowak', 'Nowak123!', 'Kamil', 'Nowak', 'knowak@gmail.com'),
('a.kowalska', 'AlaK0w@l', 'Alicja', 'Kowalska', 'a.kowalska@gmail.com'),
('p.wisniew', 'W!sn13w2024', 'Piotr', 'Wiśniewski', 'p.wisniew@gmail.com'),
('m.zielony', 'Ziel0ny#55', 'Marek', 'Zieliński', 'm.zielony@gmail.com'),
('j.krawczyk', 'Kr@wczyk77', 'Julia', 'Krawczyk', 'j.krawczyk@gmail.com')
");


echo "Dane zostały dodane do tabel.<br>";


?>
