<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Kalkulator</title>
</head>
<body>

<h2>Kalkulator</h2>

<form method="post">
    Liczba 1: <input type="number" name="liczba1" required><br><br>

    Liczba 2: <input type="number" name="liczba2" required><br><br>

    Działanie:
    <select name="dzialanie">
        <option value="dodawanie">Dodawanie</option>
        <option value="odejmowanie">Odejmowanie</option>
        <option value="mnozenie">Mnożenie</option>
        <option value="dzielenie">Dzielenie</option>
    </select>
    <br><br>

    <input type="submit" value="Oblicz">
</form>

<?php

if(isset($_POST['liczba1']) && isset($_POST['liczba2'])){

    $a = $_POST['liczba1'];
    $b = $_POST['liczba2'];
    $dzialanie = $_POST['dzialanie'];

    if($dzialanie == "dodawanie"){
        echo "Wynik: " . ($a + $b);
    }

    elseif($dzialanie == "odejmowanie"){
        echo "Wynik: " . ($a - $b);
    }

    elseif($dzialanie == "mnozenie"){
        echo "Wynik: " . ($a * $b);
    }

    elseif($dzialanie == "dzielenie"){

        if($b == 0){
            echo "Błąd: nie można dzielić przez zero!";
        }else{
            echo "Wynik: " . ($a / $b);
        }

    }

}

?>

</body>
</html>