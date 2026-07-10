<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tekst = $_POST["tekst"];

    $znaki = strlen($tekst);
    $slowa = str_word_count($tekst);

    $samogloski = preg_match_all('/[aeiouyąęóAEIOUYĄĘÓ]/u', $tekst);

    echo "Znaki: $znaki <br>";
    echo "Słowa: $slowa <br>";
    echo "Samogłoski: $samogloski <br>";
}
?>

<form method="post">
    <textarea name="tekst" rows="5" cols="40"></textarea><br>
    <input type="submit" value="Policz">
</form>