<!DOCTYPE html>
<head>
	<title>PWA vježba</title>
    <meta charset="UTF-8" />
    <style>
    </style>
</head>
<body>
	<form action="" method="POST">
        Unesite stranice pravokutnika: <br />
        a: <input type="text" name="stranicaA" /><br/><br>
        b: <input type="text" name="stranicaB" /><br><br>
       

			<input type="submit" name="submit" value="Pošalji" />
	</form>
</body>
</html>
<?php
    function povrsina_pravokutnika($a, $b){
        return $a * $b; 
    }
    if(isset($_POST['stranicaA'],$_POST['stranicaB'])){
        $a = $_POST['stranicaA'];
        $b = $_POST['stranicaB'];
        
        $p = povrsina_pravokutnika($a,$b);
        echo "Površina je: $p";
    }

 ?>
 /*Stvorite vlastitu php funkciju koja izračunava površinu pravokutnika. 
 Za unos podataka koristiti HTML formu koju možete preuzeti na linku na kraju pitanja.
Formula za izračun:
P=a*b */