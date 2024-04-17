<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba8</title>
    <style>
        li {
		list-style-type: none;
	    }
        input[type="submit"] {
            background-color: #2CBBBB;
            border: 1px solid #27A0A0;
            display: inline-block;
            color: #FFFFFF;
            font-size: 14px;
		    padding: 8px 18px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php
    echo "<p>Označi vozilo :</p><ul>";
    $cars = array("Audi", "BMW", "Renault", "Citroen" );
    echo  "<form action='' method='POST' id='cars'><ul>";
    foreach($cars as $car) {
        echo '<li><input type="radio" name="car" value="' .$car . '" required> ' . $car . '</li>'; ;
    }
    echo "
	  </ul>
	  <p><input type='submit' value='pošalji'></p>
	  </form>"; 
	  if(isset($_POST['car'])) { echo $_POST['car']; }
?>