/*Napisati PHP dokument koji će ispisivati tablicu i vrijednosti varijabli 
unutar čelija tablice (postojeće vrijednosti zamjenite varijablama). tablica3.html */
<?php 
$f = "Jill";
$l = "Smith";
$a = 50;

echo '<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>

<table style="width:100%">
  <tr>
    <th colspan="3">Data</th>

  </tr>
  <tr>
    <td>'.$f.'</td>
    <td>'.$l.'</td>
    <td>'.$a.'</td>
  </tr>
</table>

</body>
</html>'
?>