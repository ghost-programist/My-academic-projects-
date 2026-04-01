<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sprawdź wiek</title>
</head>
<body>

<h2>Sprawdź czy jesteś pełnoletni</h2>

<form method="post">

Rok urodzenia:
<input type="number" name="rok" required>

<input type="submit" value="Sprawdź">

</form>

<?php

if(isset($_POST['rok'])){

    $rok_urodzenia = $_POST['rok'];
    $aktualny_rok = date("Y");

    $wiek = $aktualny_rok - $rok_urodzenia;

    echo "Twój wiek: " . $wiek . "<br>";

    if($wiek >= 18){
        echo "Jesteś pełnoletni";
    }else{
        echo "Nie jesteś pełnoletni";
    }

}

?>

</body>
</html>