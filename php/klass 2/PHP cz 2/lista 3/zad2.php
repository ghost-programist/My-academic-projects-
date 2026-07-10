<?php
if(isset($_POST['imie']) && isset($_POST['komentarz'])){
    $linia = $_POST['imie'] . ": " . $_POST['komentarz'] . "\n";
    file_put_contents("komentarze.txt", $linia, FILE_APPEND);
}

echo "<h3>Komentarze:</h3>";

if(file_exists("komentarze.txt")){
    echo nl2br(file_get_contents("komentarze.txt"));
}
?>

<form method="post">
    Imię: <input type="text" name="imie"><br>
    Komentarz: <textarea name="komentarz"></textarea><br>
    <button type="submit">Dodaj</button>
</form>