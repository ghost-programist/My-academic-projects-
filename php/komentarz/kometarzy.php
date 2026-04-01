<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: cadetblue;
        text-align: center;
    }
</style>
<body>

    <?php 
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            if(!empty($_POST['name']) && !empty($_POST['komentarz'])){
                $name = $_POST['name'];
                $komentarz = $_POST["komentarz"];
                $f = fopen("kom.txt", "r");
    echo "<textarea rows='10' cols='50'>";
    while($line = fgets($f)){
        $dane = explode('^', $line);
        echo $dane[0] . ": " . $dane[1];
    }
    echo "</textarea>";
    fclose($f);
                }

            }
            

        echo "<textarea>";

            echo $dane[1] . "\n";
        echo "</textarea>";
        ?>
</body>
</html>