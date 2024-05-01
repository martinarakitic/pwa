<!DOCTYPE html>
<head>
	<title>PWA vježba</title>

    <meta charset="UTF-8" />
    <style>
        
    </style>
</head>
<body>
	<form action="" method="POST">
        Željena boja stranice: <br /><input type="color" name="boja" />
        <br>
        <label><input type="checkbox" name = "option" value="Option">Želim napraviti promjenu</label> 
		<br>
			<input type="submit" name="submit" value="Promjeni" />
	</form>
</body>
</html>

<?php 
    if(isset($_POST['option'])){
        $pozadina = $_POST['boja'];
        echo "
        <style>
            body { background-color: $pozadina; } 
        </style>";
    }
?>
/*U postojećem HTML dokumentu (možete ga preuzeti s linka na kraju zadatka) napišite php kod koji provjerava 
da li je prilikom slanja forme označen checkbox. Ako je označen, pozadinska boja cijele stranice treba se
 promijeniti u poslanu vrijednost. 
Napomena: 
Pogledajte primjer 2. u lekciji Provjera varijabli
Dokument sa .html ekstenzijom potrebno je promijeniti u dokument sa .php ekstenzijom. */