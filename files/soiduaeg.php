<?php
?>
<!--Sõiduaeg – leia auto sõiduaeg tundides ja minutites. Arvutused teosta kasutajalt saadud
andmete põhjal, kus kasutaja lisab stardi ja lõppaja kujul hh:mm. Eeldame, et sõiduaeg jääb
ühe ööpäeva sisse. Lisa tühja välja kontroll ja näiteks, kas lisatud ajad on
vähemalt viis sümbolit pikad.-->

<!--arvutus ja andmete t88tlemine-->
<?php

$andmedFail = 'soiduaeg.csv';
$algus = $_GET['algus'];
$lopp = $_GET['lopp'];

if(strlen($algus) == 0 or strlen($lopp) == 0){echo 'Sisesta korrektsed ajad';
} else {
    $ajad = array();
    foreach ($_GET as $ajad) {
        $ajad = explode(':', $ajad);
        $ajad = mktime($ajad[0], $ajad[1], 0,date('m', time()),date('d', time()),date('Y', time()));
//      l@bi tsykkli pannakse ajad massiivi, aeg0 on algus, aeg1 on lopp
        $ajaAndmed[] = $ajad;
    }
    $vahe = $ajaAndmed[1] - $ajaAndmed[0];
    $tunnid = (int)($vahe / (60 * 60));
    $minutid = $vahe % (60 * 60) / 60;
    $ridaFaili = $algus.";".$lopp.";".$tunnid.";".$minutid."\n";
    $salvestaFaili = file_put_contents($andmedFail, $ridaFaili,FILE_APPEND | LOCK_EX);
    if($salvestaFaili !== false) {
        echo 'Salvestatud';
    } else {
        echo 'Sisesta andmed';
    }
}
echo '<hr>';
echo '<table>';
$failisisu = fopen($andmedFail, 'r') or die('Ei leia faili');
$jrk = 1;
while (!feof($failisisu)){
    $rida = fgetcsv($failisisu, filesize($andmedFail), ';');
    echo '<tr>';
}
fclose($failisisu);
echo '</table>';
?>


echo '<hr>';
echo '<h3>Andmed</h3>';
echo '<table>';
    echo '
    <thead>
    <tr>
        <th>sõidu algus</th>
        <th>sõidu lõpp</th>
        <th>tunnid</th>
        <th>minutid</th>
    </tr>
    </thead>';
    echo '<tbody>';
    $sisu = fopen($andmeFail, 'r') or die('Ei leia faili!');
    $jrk = 1;
    while(!feof($sisu)){
    $rida = fgetcsv($sisu, filesize($andmeFail),';');
    echo '<tr>';
        $arv = count($rida); //rea väljade arv
        if($arv == 4) {
        for ($i = 0; $i < $arv; $i++) {
        echo '<td>' . $rida[$i] . '</td>';
        }
        echo '</tr>';
    }
    }
    fclose($sisu);
    echo '<tbody>';
    echo '</table>';