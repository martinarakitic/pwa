<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H1-funkcije</title>
</head>
<body>
<form action="" method="post">
        <label for="br1">Unesi broj za tablicu *:</label>
        <input type="number" id="br1" name="br1" required><br><br>
        <label for="br2">Unesi broj za razinu ispisa tablice *:</label>
        <input type="number" id="br2" name="br2" required><br><br>
        <button type="submit">Pošalji</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['br1']) && isset($_POST['br2'])) {
    $br = $_POST['br1'];
    $br_granica = $_POST['br2'];

    function tablica_mno($br, $br_granica){
        for($i = 1; $i <= $br_granica; $i++){
            echo "$br * $i = " . ($br * $i) . "<br>";
        }
    }
    tablica_mno($br, $br_granica);
} 

?>
Funkcija za ispis tablice množenja 
Napisati dokument koji se sastoji od forme. U formi je potrebno postaviti dva polja za unos broja (number) i gumb za slanje. 
Za slanje podataka potrebno je koristiti metodu post.
U prvo polje se upisuje broj za koji će se raditi tablica množenja, a u drugo polje broj do koje razine će se ispisivati tablica množenja.
Podaci forme se šalju php skripti koja zatim pomoću vlastite funkcije ispisuje tablicu množenja