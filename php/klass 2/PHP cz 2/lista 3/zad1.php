<?php
if(isset($_POST['tekst'])){
    $plik = fopen("dane.txt", "a"); // dopisywanie
    fwrite($plik, $_POST['tekst'] . "\n");
    fclose($plik);
}

echo "<h3>Zawartość pliku:</h3>";

if(file_exists("dane.txt")){
    echo nl2br(file_get_contents("dane.txt"));
}
?>

<form method="post">
    <textarea name="tekst"></textarea><br>
    <button type="submit">Zapisz</button>
</form>