<?php
$servername = "localhost";
$username = "root";   
$password = "";       
$dbname = "biblioteka";


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




$sql = "CREATE TABLE IF NOT EXISTS Ksiazki (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tytul VARCHAR(100),
    autor INT,
    rok_wydania DATE,
    jezyk VARCHAR(100),
    opis VARCHAR(100),
    gatunek VARCHAR(100),
    ilosc INT,
    pozycja VARCHAR(100)
)";
$conn->query($sql);


$sql = "CREATE TABLE IF NOT EXISTS Klienci (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imie_nazwisko VARCHAR(50),
    numer_kontaktowy VARCHAR(20),
    email VARCHAR(100),
    PESEL INT,
    adres VARCHAR(100),
    ilosc_wypozyczen INT
)";
$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS Wypozyczenia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_ksiazki INT,
    id_klienta INT,
    data_wypozyczenia DATE,
    termin_zwrotu DATE,
    FOREIGN KEY (id_ksiazki) REFERENCES Ksiazki(id) ON DELETE CASCADE,
    FOREIGN KEY (id_klienta) REFERENCES Klienci(id) ON DELETE CASCADE
)";
$conn->query($sql);
/*
$conn->query("INSERT INTO Ksiazki (tytul, autor, rok_wydania, jezyk, opis, gatunek, ilosc, pozycja)
VALUES 
('Pan Tadeusz', 'Adam Mickiewicz', 1834, 'polski', 'Epopeja narodowa', 'poemat', 3, 'A1'),
('Lalka', 'Bolesław Prus', 1890, 'polski', 'Powieść realistyczna', 'powieść', 2, 'B2'),
('Harry Potter i Kamień Filozoficzny', 'J.K. Rowling', 1997, 'angielski', 'Fantastyka', 'fantasy', 5, 'C3')
");

$conn->query("INSERT INTO Klienci (imie_nazwisko, numer_kontaktowy, email, PESEL, adres, ilosc_wypozyczen)
VALUES
('Jan Kowalski', '500123456', 'jan.kowalski@example.com', '90010112345', 'Warszawa, ul. Lipowa 5', 1),
('Anna Nowak', '501987654', 'anna.nowak@example.com', '92020254321', 'Kraków, ul. Długa 10', 0),
('Piotr Zieliński', '600111222', 'piotr.z@example.com', '95030311111', 'Gdańsk, ul. Morza 7', 2)
");


$conn->query("INSERT INTO Wypozyczenia (id_ksiazki, id_klienta, data_wypozyczenia, termin_zwrotu)
VALUES
(1, 1, '2025-11-01', '2025-11-15'),
(3, 3, '2025-10-25', '2025-11-10')
");
*/

echo "Tabele zostały utworzone.<br>";


echo "Dane zostały dodane do tabel.<br>";



$sql = ('SELECT k.imie_nazwisko, ks.tytul, w.data_wypozyczenia
FROM Wypozyczenia w
INNER JOIN Klienci k ON w.id_klienta = k.id
INNER JOIN Ksiazki ks ON w.id_ksiazki = ks.id  ');//zadanie 1
$result = $conn->query($sql);
echo "<br>";
    while($row = $result->fetch_assoc()){
        echo      $row['imie_nazwisko'] .", " . $row['tytul'] .", " . $row['data_wypozyczenia'] . "<br>";
    }



$sql = ('SELECT k.imie_nazwisko
FROM Wypozyczenia w
RIGHT JOIN klienci k ON  w.id_klienta = k.id');//zadanie 2
$result = $conn->query($sql);
echo "<br>";
    while($row = $result->fetch_assoc()){
        echo   $row['imie_nazwisko']  . "<br>";
    }

    
$sql = ('SELECT ks.tytul
FROM Wypozyczenia w
RIGHT JOIN ksiazki ks ON  w.id_ksiazki = ks.id');//zadanie 3
$result = $conn->query($sql);
echo "<br>";
    while($row = $result->fetch_assoc()){
        echo   $row['tytul']  . "<br>";
    }



$sql = ('SELECT k.imie_nazwisko, ks.tytul, w.data_wypozyczenia
FROM Wypozyczenia w
INNER JOIN Klienci k ON k.id = w.id_klienta
INNER JOIN Ksiazki ks ON ks.id = w.id_ksiazki  ');//zadanie 4
$result = $conn->query($sql);
echo "<br>";
    while($row = $result->fetch_assoc()){
        echo      $row['imie_nazwisko'] .", " . $row['tytul'] .", " . $row['data_wypozyczenia'] . "<br>";
    }


$sql = ("SELECT tytul, autor, jezyk, opis, gatunek FROM ksiazki"
);//zadanie 5
$result = $conn->query($sql);
echo "<br>";
    while($row = $result->fetch_assoc()){
        echo  $row['autor'] .", " . $row['tytul'] ."," . $row['jezyk'] .", " . $row['opis']. ", " . $row['gatunek'] . "<br>";
    }



?>
