<?php 
    $dan = $_POST['unos_dana'];
    switch(strtolower($dan)) {
        case 'ponedeljak':
            echo "<span style='font-size: 30px;'> Ponedjeljak je prvi dan u tjednu.</span>";
            break;
        case 'utorak':
            echo "<span style='font-size: 30px;'> Utorak je drugi dan u tjednu.</span>";
            break;
        case 'srijeda':
            echo "<span style='font-size: 30px;'> Srijeda je treći dan u tjednu.</span>";
            break;
        case 'četvrtak':
            echo "<span style='font-size: 30px;'> Četvrtak je četvrti dan u tjednu.</span>";
            break;
        case 'petak':
            echo "<span style='font-size: 30px;'> Petak je peti dan u tjednu.</span>";
            break;
        case 'subota':
            echo "<span style='font-size: 10px;'> Subota je šesti dan u tjednu.</span>";
            break;
        case 'nedelja':
            echo "<span style='font-size: 10px;'> Nedjelja je sedmi dan u tjednu.</span>";
            break;
        default:
            echo "<span style='font-size: 10px;'> Takav dan ne postoji</span>";
            break;
    }

?>
