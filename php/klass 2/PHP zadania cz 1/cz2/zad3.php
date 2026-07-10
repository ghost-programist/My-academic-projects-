<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formularz</title>
</head>
<body>

<form method="POST">
    Imię: <input type="text" name="imie"><br><br>
    Nazwisko: <input type="text" name="nazwisko"><br><br>
    <input type="submit" value="Wyślij">
</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];

    echo "<h3>Witaj $imie $nazwisko</h3>";
}

?>

</body>
</html>