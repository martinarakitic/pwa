<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M1-funkcije</title>
</head>
<body>
<form action="" method="post">
        <label for="num">Unesi broj:</label>
        <input type="number" id="broj" name="num" required><br>
      
        <input type="checkbox" id="vel" name="vel">
        <label for="vel">Promjeni vel. teksta:</label><br><br>
        <button type="submit">Pošalji</button>
    </form>
</body>
</html>
<?php
if(isset($_POST['vel'])) {
    $vel = $_POST['num'] . 'px';
    echo '<style>body { font-size: ' . $vel . '; }</style>';
} 
?>
Napisati dokument koji se sastoji od forme. U formi je potrebno postaviti polje za unos broja (number),
 checkbox i gumb za slanje. Za slanje podataka potrebno je koristiti metodu post. 
Podaci forme se šalju php skripti koja zatim provjerava da li je označen checkbox. Ukoliko je označen, 
veličina teksta stranice treba se promjeniti u odabranu veličinu. 
Nesmije se dogoditi pojava greške "Undefined index" (koristiti funkciju isset())