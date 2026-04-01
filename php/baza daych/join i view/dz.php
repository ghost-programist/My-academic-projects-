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
    <form method="GET">
    <select name="klient" value="id">
        <?php
       $sql = "SELECT id, imie_nazwisko FROM klienci";
       $result = $conn->query($sql);
       

           while ($row = $result->fetch_assoc()) {
     
         echo"<option value=" .$row["id"]   .">".$row["imie_nazwisko"] ."</option>";
    }


?>

</select>


    <select name="tytuly" value="id">
        <?php
       $sql = "SELECT id, tytul FROM ksiazki";
       $result = $conn->query($sql);
       

           while ($row = $result->fetch_assoc()) {
     
         echo"<option value=" .$row["id"]   .">".$row["tytul"] ."</option>";
    }


?>



</select>

<input type="date" name = "data_wypozyczenia">
<input type="date" name = "termin_zwrotu">
<button>SUbmit</button>

</form>
<?php 
    if($_SERVER['REQUEST_METHOD']==="GET"){
    $id_klient = $_GET ['klient'];
    $id_tytula = $_GET ['tytuly'];
    $id_wypozyczenia = $_GET ['data_wypozyczenia'];
    $id_zwrot = $_GET ['termin_zwrotu'];


    $sql =  "INSERT INTO wypozyczenia (id_ksiazki, id_klienta, data_wypozyczenia, termin_zwrotu)
    VALUES ($id_tytula, $id_klient, '$id_wypozyczenia', '$id_zwrot')";

    $conn->query($sql);
    }
?>

<?php 
$sql =     "SHOW TABLES";

$result = $conn->query($sql);
while ($row = $result->fetch_row()) {
    echo $row[0];
}
?>
</body>
</html>
