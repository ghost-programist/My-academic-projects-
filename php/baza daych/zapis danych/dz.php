<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteka";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
    <select name="" value="id">
        <?php
       $sql = "SELECT id, imie_nazwisko FROM klienci";
       $result = $conn->query($sql);
       

           while ($row = $result->fetch_assoc()) {
     
         echo"<option value=" .$row["id"]   .">".$row["imie_nazwisko"] ."</option>";
    }


?>

</select>


    <select name="" value="id">
        <?php
       $sql = "SELECT id, tytul FROM ksiazki";
       $result = $conn->query($sql);
       

           while ($row = $result->fetch_assoc()) {
     
         echo"<option value=" .$row["id"]   .">".$row["tytul"] ."</option>";
    }


?>



</select>

<input type="date" name = "data_wyporzyczenia">
<input type="date" name = "termin_zwrotu">
<button>SUbmit</button>

</form>
</body>
</html>
