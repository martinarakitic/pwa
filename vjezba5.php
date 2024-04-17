<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V5</title>
    <style>
        .zeleno {
            color: white;
            background-color: green;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
        }
        .crveno {
            color: white;
            background-color: red;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
        }
        h3 {
            margin: 0px;
        }
    </style>
</head>
<body>

    <p>Igra(pogodi broj)</p>
    <form action="" method="post" id="">
        <label for="brojevi">Upiši jedan broj od 1 do 10*</label>
        <input type="number" id="brojevi" name="brojevi">
    </form>
</body>
</html>

<?php 
    $nasumican_broj = rand(1,9);

    if (isset($_POST["brojevi"])) {
        if($_POST["brojevi"] == $nasumican_broj){
            echo '<h2 class="zeleno">Pogodak, probaj ponovno!</h2>';
        } else {
            echo '<h2 class="crveno">Krivo, probaj ponovno!</h2>';
        }
    echo'<h3>Zamišljen broj je bio '. $nasumican_broj . '</h3>';
    }
?>