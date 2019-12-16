<?php
$allikas = 'tootajad.csv';
if (!file_exists($allikas)){
    echo 'Faili nimi on '.$allikas;
} else {
    $minu_csv = fopen($allikas, 'r') or die('Ei leia faili!');
}
while(!feof($minu_csv)){
    $rida = fgetcsv($minu_csv, filesize($allikas),';');
    //mida teeb rida?
    $andmed[] = $rida;
    $arv = count($rida);
    for($i = 0; $i<$arv; $i++){
        echo $rida[$i].' ';
    }
    echo '<br>';

}
fclose($minu_csv);
