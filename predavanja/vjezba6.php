<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V6</title>
    <style>
        .operatori {
            padding: 10px;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Kalkulator (switch)</h1>
    <form action="" method="post" id="kalkulator">
        <label for=b1>Unesite prvi broj: </label>
        <input type="number" name="b1" id="b1"><br><br>

        <label for="b2">Unesite drugi broj: </label>
        <input type="number" name="b2" id="b2"><br>

        <h2>Odaberite računsku operaciju: </h2>
        <input type="submit" value="+" name="operator" class="operatori">
        <input type="submit" value="-" name="operator" class="operatori">
        <input type="submit" value="*" name="operator" class="operatori">
        <input type="submit" value="/" name="operator" class="operatori">
    </form>
</body>
</html>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $b1 = $_POST["b1"];
        $b2 = $_POST["b2"];
        $operator = $_POST["operator"];
        $rez = 0;
        if(isset($_POST["b1"]) && isset($_POST["b2"])) {
            switch($operator) {
                case "+":
                    $rez = $b1 + $b2;
                    break;
                case "-":
                    $rez = $b1 - $b2;
                    break;
                case "*":
                    $rez = $b1 * $b2;
                    break;
                case "/":
                    $rez = $b1 / $b2; 
            }
            echo '<h2>Rezultat: ' . $rez . '</h2>';
        }
    }
?>