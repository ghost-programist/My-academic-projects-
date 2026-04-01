<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodanie komentarza</title>
</head>
<style>
    body {
        background-color: bisque;
    }
    h1 {
        text-align: center;
    }


</style>
<body>
    <form action="" method="POST">
    <h1>Dodanie komentarza</h1>
    <h2>Dodaj nazwą uzytkownika</h2>
    <input type="name" name="name">
    <p>Komentarz</p>
    <textarea name="komentarz" id="komentarz"></textarea><br>
    <button>Nacisz</button>
</form>

    <?php 
        if($_SERVER['REQUEST_METHOD'] === "POST"){

            if( !empty($_POST['name']) && !empty($_POST["komentarz"])){
                $name = $_POST['name'];
                $komentarz = $_POST["komentarz"];
                $f = fopen("kom.txt", "a");
                fwrite($f, "$name^$komentarz\n");
                fclose($f);
                header("location: kometarzy.php");
            }
            
            
        }
    ?>

</body>
</html>

