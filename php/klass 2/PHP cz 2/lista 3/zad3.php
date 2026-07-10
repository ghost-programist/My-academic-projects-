<?php
$produkty = ["Laptop", "Mysz", "Klawiatura", "Monitor", "Drukarka"];

if(isset($_POST['szukaj'])){
    $szukaj = $_POST['szukaj'];

    if(in_array($szukaj, $produkty)){
        echo "Produkt znaleziony";
    } else {
        echo "Produkt nie istnieje";
    }
}
?>

<form method="post">
    Szukaj: <input type="text" name="szukaj">
    <button type="submit">Szukaj</button>
</form>