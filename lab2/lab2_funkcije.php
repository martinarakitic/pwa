<?php 
 $dan = date('D');
 $slika = '';
    switch($dan) {
        case 'Mon':
            $slika = 'img/pon.jpg';
            break;
        case 'Tue':
            $slika = 'img/uto.jpg';
            break;
        case 'Wed':
            $slika = 'img/sri.jpg';
            break;
        case 'Thu':
            $slika = 'img/cet.jpg';
            break;
        case 'Fri':
            $slika = 'img/pet.jpg';
            break;
        case 'Sat':
            $slika = 'img/sub.jpg';
            break;
        case 'Sun':
            $slika = 'img/ned.jpg';
            break;
    }
    echo "<img src='$slika' alt='Slika dana u tjednu width=100%'/>";
?>
/*Napisati php skriptu koja korištenjem funkcije date() prikazuje slike ovisno o danu u tjednu.
Za ponedjeljak treba prikazati sliku pon.jpg
Za utorak treba prikazati sliku uto.jpg
Za srijedu treba prikazati sliku sri.jpg
Za četvrtak treba prikazati sliku cet.jpg
Za petak treba prikazati sliku pet.jpg
Za subotu treba prikazati sliku sub.jpg
Za nedjelju treba prikazati sliku ned.jpg
Napomena:
Doba dana se dobiva korištenjem funkcije date()
Koristite Uvjetne strukture */