<?php
?>
<!--Sõiduaeg – leia auto sõiduaeg tundides ja minutites. Arvutused teosta kasutajalt saadud
andmete põhjal, kus kasutaja lisab stardi ja lõppaja kujul hh:mm. Eeldame, et sõiduaeg jääb
ühe ööpäeva sisse. Lisa tühja välja kontroll ja näiteks, kas lisatud ajad on
vähemalt viis sümbolit pikad.-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>06 - PHP - Vormid</title>
</head>
<body>
<h2>Andmed</h2>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    Soidu algusaeg <input type="text" name="algus"><br><br>
    Soidu loppaeg <input type="text" name="lopp"><br><br>
    <input type="submit" value="Arvuta">
</form>
<!--arvutus ja andmete t88tlemine-->
<?php

$andmed = 'ajad.csv';
$algus = $_GET['algus'];
$lopp = $_GET['lopp'];
?>

