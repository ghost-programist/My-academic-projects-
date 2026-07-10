<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $login = $_POST["login"];
    $email = $_POST["email"];
    $haslo = $_POST["haslo"];
    $haslo2 = $_POST["haslo2"];

    $blad = false;

    if (strlen($login) < 5) {
        $blad = true;
    }

    if (strpos($email, "@") === false) {
        $blad = true;
    }

    if (strlen($haslo) < 8) {
        $blad = true;
    }

    if ($haslo !== $haslo2) {
        $blad = true;
    }

    if ($blad) {
        echo "Błąd formularza";
    } else {
        echo "Rejestracja zakończona sukcesem";
    }
}
?>

<form method="post">
    Login: <input type="text" name="login"><br>
    Email: <input type="text" name="email"><br>
    Hasło: <input type="password" name="haslo"><br>
    Powtórz hasło: <input type="password" name="haslo2"><br>
    <input type="submit" value="Zarejestruj">
</form>