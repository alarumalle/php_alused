<?php

// $varnimi = $_GET['varnimi'] siis ei pea tegema eraldi vormi vaid saab sisestada aadressiribale .php?varnimi=xxx

//Kasutaja lisab vormi nime, seda näiteks suured ja väikesed tähed läbisegi. Sina kood tervitab teda kenasti nimepidi, kus nimi algab suure algustähega.
//Näiteks: sisend–>mARiO; väljund–>Tere, Mario!

$nimi = $_GET['nimi'];
$nimi = strtolower($nimi);
$nimi = ucfirst($nimi);

echo 'Tere '.$nimi;
echo '<hr><br>';

