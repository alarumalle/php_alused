<?php

// $varnimi = $_GET['varnimi'] siis ei pea tegema eraldi vormi vaid saab sisestada aadressiribale .php?varnimi=xxx

//Kasutaja lisab vormi nime, seda näiteks suured ja väikesed tähed läbisegi. Sina kood tervitab teda kenasti nimepidi, kus nimi algab suure algustähega.
//Näiteks: sisend–>mARiO; väljund–>Tere, Mario!

$nimi = $_GET['nimi'];
$nimi = strtolower($nimi);
$nimi = ucfirst($nimi);

echo 'Tere '.$nimi;
echo '<hr><br>';

//Kuna on teada, et PHP käsitleb teksti kui massiivi, siis peaks saama seda tsükli abil nö. tükeldada. Ülesandeks on etteantud teksti iga tähe järgi lisada punkt.

$sisend = $_GET['sisend'];
for ($indeks = 0; $indeks < strlen($sisend); $indeks++) {
    $tahemark = strtoupper($sisend[$indeks]);
    echo $tahemark, '.';
}

echo '<hr><br>';

//Koosta tekstiväli, mis kuvab kasutaja sisestatud sõnumeid. Kasutaja ropud sõnad asendatakse tärnidega.
//Näiteks: sisend–>Sa oled täielik noob; väljund–>Sa oled täielik ***

$roppSonad = array('kurat', 'noob');
$lause = $_GET[$lause];
foreach ($roppSonad as $sona) {
    $asendus = '';
    for ($loendur = 0; $loendur < strlen($sona); $loendur++){
        $asendus = '*';
    }
    echo $asendus;
}

echo '<hr><br>';

