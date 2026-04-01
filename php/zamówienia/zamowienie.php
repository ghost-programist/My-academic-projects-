<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = htmlspecialchars($_POST['imie']);
    $email = htmlspecialchars($_POST['email']);
    $produkt = htmlspecialchars($_POST['produkt']);
    $ilosc = (int)$_POST['ilosc'];

  
    $wiersz = "$imie, $email, Produkt: $produkt, Ilość: $ilosc\n";


    file_put_contents("zamowienia.txt", $wiersz, FILE_APPEND);

    echo "<!DOCTYPE html>
    <html lang='pl'>
    <head>
        <meta charset='UTF-8'>
        <title>Zamówienie przyjęte</title>
        <link rel='stylesheet' href='style.css'>
        <style>
            body {
            background-color: #ca7990ff;
            text-align: center;
            color: #333;
            }
            </style>
    </head>
    <body>
        <div class='container'>
            <h1>Dziękujemy!</h1>
            <p>Twoje zamówienie zostało pomyślnie złożone.</p>
            <a href='Pr1.html'>Wróć do strony głównej</a>
        </div>
    </body>
    </html>";
} else {
    header("Location: index.html");
    exit;
}
?>
