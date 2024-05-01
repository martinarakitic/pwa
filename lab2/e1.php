<?php 
 $sati = date('H');
 if($sati >=5 && $sati < 12){
    echo "Dobro jutro!";
 } elseif ($sati >=12 && $sati < 18) {
    echo "Dobar dan!";
 } elseif($sati >= 18 && $sati < 23) {
    echo "Dobro veče!";
 } else {
    echo "Laku noć!";
 }
?>
Napisati php skriptu koja korištenjem funkcije datuma i vremena, ispisuje rečenice ovisno o dobu dana.
- između 5h i 12h treba ispisati  "Dobro jutro!"
- između 12h(uključujući) i 18h treba ispisati  "Dobar dan!"
- između 18h(uključujući) i 23h treba ispisati  "Dobao veče!"
- za ostalo treba ispisati "Laku noć!"
