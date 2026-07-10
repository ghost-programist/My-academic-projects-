<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $login = $_POST["login"];
    $haslo = $_POST["haslo"];

    if ($login == "admin" && $haslo == "imie_nazwisko") {
        $_SESSION["user"] = $login;
        echo "Zalogowano poprawnie <a href='panel.php'>Przejdź do panelu</a>";
    } else {
        echo "Błędne dane logowania";
    }
}
?>

<form method="post">
    Login: <input type="text" name="login"><br>
    Hasło: <input type="password" name="haslo"><br>
    <input type="submit" value="Zaloguj">
</form>