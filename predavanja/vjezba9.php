<?php 
function ducan($stanje="otvoren"){
    $vrijeme_sad = strtotime('now');
    $danasnji_dan = date('l', $vrijeme_sad);
    $praznici = array('01-01', '05-01', '06-22', '08-05', '05-30', '08-15', '10-08', '11-01', '12-25', '12-26');
    if ($stanje == "otvoren") {
        if ($danasnji_dan == "Saturday") {
            if (date('H:i', $$vrijeme_sad) >= '09:00' && date('H:i', $$vrijeme_sad) <= '14:00') {
                echo "Dućan je otvoren.";
            } else {
                echo "Dućan je zatvoren.";
            }
        } elseif ($trenutni_dan == "Sunday" || in_array(date('m-d', $$vrijeme_sad), $praznici)) {
            echo "Dućan je zatvoren.";
        } elseif (date('H:i', $$vrijeme_sad) >= '08:00' && date('H:i', $$vrijeme_sad) <= '20:00') {
            echo "Dućan je otvoren.";
        } else {
            echo "Dućan je zatvoren.";
        }
    } else {
        echo "Dućan je zatvoren.";
    }
}
?>
