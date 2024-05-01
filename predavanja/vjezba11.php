<?php 
    function prost_broj($broj){
        if($broj <= 1) {
            return false;
        }
        for($i = 2; $i <= sqrt($broj); $i++){
            if($broj % $i == 0){
                return false;
            }
        }
        return true;
    }

    function ispis_brojeva($broj){
        echo "Prosti br manji od $broj su:<br> ";
        for ($i = 2; $i < $broj; $i++){
            if(prost_broj($i)) {
                echo $i . "<br>";
            }
        }
    }
    ispis_brojeva(100);
?>