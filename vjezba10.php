<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 10</title>
</head>
<body>
    <h1>Zadatak - str_word_count</h1>
    <p>Ispis koliko riječi ima ulazni niz</p>

    <form action="" method="post">
        <lable for="niz">Ulazni niz: </lable><br>
        <input type="text" id="niz" name="niz"/><br><br>
        <input type="submit" value="Ispiši broj riječi">
    </form>
</body>
</html>
<?php 
    if(isset($_POST['niz']) && !empty($_POST['niz'])){
        $niz = $_POST['niz'];
        $broj_rijeci = str_word_count($niz);
        echo "<p>ulazni niz:  ". $niz . " Sadrži $broj_rijeci riječi.</p>"; 
    } else{
        echo "<p> Niste unijeli rečenicu! </p>";
    }
?>