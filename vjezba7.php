<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V7</title>
    <style>

    </style>
</head>
<body>
    <h1>Ocjene iz kolokvija</h1>
    <form action="" method="POST" id="ocjene">
        <label for="o1">Ocjena I. kolokvija: </label>
        <input type="number" name="o1" id="o1" min="1" max="5" required><br><br>
        <label for="o2">Ocjena II. kolokvija: </label>
        <input type="number" name="o2" id="o2" min="1" max="5" required><br><br>
        <input type="submit" value="Izračunaj">
    </form>
</body>
</html>
<?php 
if(isset($_POST['o1']) && isset($_POST['o2'])){
    $ocjene = array($_POST['o1'], $_POST['o2']);
    $prosjek = ($ocjene[0] + $ocjene[1]) / 2;
    if($ocjene[0] < 1 || $ocjene[0] > 5 || $ocjene[1] < 1 || $ocjene[1] > 5 ) {
        echo 'Ponovi unos, ocjene nisu dobro unešene.';
    } else if ($ocjene[0] == 1 || $ocjene[1] == 1) {
        echo 'Jedan od kolokvija je negativan, zaključna ocjena = 1.';
    } else {
        echo '
        <p>I. kolokvij: ' . $ocjene[0] . '</p>
        <p>II. kolokvij: ' . $ocjene[1] . '</p>
        <p>Prosjek: ' . $prosjek . '</p> 
        <p>Zaključna ocjena: ' . round($prosjek) . '</p>';
    }}
?>