<?php 
    //zadatak 1.
    $a = TRUE;
    $b = FALSE;
    $c = TRUE;
    echo $a and (!$b or !$c);
    //--> 1

    echo "<br>";

    //zadatak 2.
    $arr_boje = array('plavo', 'žuto', 'zeleno');
    $arr_boje[0] = 'crveno';
    $arr_boje[2] = 'ljubicasto';
    echo "Ispis boje: " . $arr_boje[2];
    //--> Ispis boje: ljubicasto

    echo "<br>";

    //zadatak 3. 
    echo "Kako ćemo ispisati vrijednost pwa? ";
    $predmet = array("pwa", "xml", "baze");
    echo $predmet[0];
    
    echo "<br>";

    //zadatak 4.
    //Što koristimo kod grupiranja više vrijednosti?
    //--> polja 

    //zadatak 5.
    $pada_kisa = TRUE;
    $trava_raste = TRUE;
    if(!$pada_kisa && !$trava_raste){
        echo "Pada kiša, trava raste";
    } else if($pada_kisa || !$trava_raste) {
        echo "Pada kiša, ali trava raste";
    } else {
        echo "Ne pada kiša";
    }
    //--> Pada kiša, ali trava ne raste

    echo "<br>";

    //zadatak 6.
    $pada_kisa2 = TRUE;
    $trava_raste2 = TRUE;
    if($pada_kisa2){
        if($trava_raste2){
            echo "Pada kiša, trava raste.";
        } else {
            echo "Pada kiša, ali trava ne raste!?";
        }
    } else {
        echo "Ne pada kiša";
    }
    //--> Pada kiša, trava raste.

    echo "<br>";

    //zadatak 7.
    $predmet2 = FALSE;
    switch($predmet2){
        case 'baze' :
            echo "Slušam baze.";
            break;
        case 'pwa':
            echo "Slušam pwa.";
            break;
        case 'xml':
            echo "Slušam xml.";
            break;
        default:
            echo "Ne slušam niti jedan predmet";
    }
    //--> Ne slušam niti jedan predmet.

    echo "<br>";

    //zadatak 8.
    $predmet3 = 'pwa';
    switch($predmet3){
        case 'baze' :
            echo "Slušam baze.";
            break;
        case 'pwa':
            echo "Slušam pwa.";
        case 'xml':
            echo "Slušam xml.";
            break;
    }
    //--> Slušam pwa Slušam xml

    echo "<br>";

    //zadatak 9. 
    $a1 = 1;
    $b1 = '1';
    if($a1 === $b1){
        echo "a i b su jednaki.";
    } else {
        echo "a i b nisu jednaki.";
    }

    //zadatak 10.
    //Kako je ispravno napisana konketanacija dvije varijable?
    //$ime . $prezime

    //zadatak 11. 
    //Ako želimo provjeriti da li su vrijednosti iste koji operator koristimo?
    //operator usporedbe 

    //zadatak 12.
    //Ako želimo dodijeliti varijabli neku vrijednost koji operator koristimo?
    //$test = 'neki test';
?>