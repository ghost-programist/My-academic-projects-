<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
</head>
<body>

<form method="post">
    Login: <input type="text" name="login"><br><br>
    Hasło: <input type="password" name="haslo"><br><br>
    <input type="submit" value="Zaloguj">
</form>

<?php
$poprawny_login = "admin";
$poprawne_haslo = "twoje_haslo";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $haslo = $_POST["haslo"];

    if ($login == $poprawny_login && $haslo == $poprawne_haslo) {
        echo "Zalogowano poprawnie";
    } else {
        echo "Błędny login lub hasło";
    }
}
?>

</body>
</html>