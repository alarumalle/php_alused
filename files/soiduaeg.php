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

if(strlen($algus) == 0 or strlen($lopp) == 0){echo '<a href="soiduaeg_vorm.php">Sisesta kõik andmed!</a>';
} else {
// pikkuse kontroll
    if (strlen($algus) != 5 or strlen($lopp) != 5) {
        echo '<a href="soiduaeg_vorm.php">Sisesta andmed õiges formaadis!</a>';
    } else {
        $ajaAndmed = array();
        foreach ($_GET as $aeg) { //get on massiiv
            $aeg = explode(':', $aeg); //explode tekitab massiivi
            $aeg = mktime($aeg[0], $aeg[1], 0, date('m', time()), date('d', time()), date('Y', time()));
//      l@bi tsykkli pannakse ajad massiivi, aeg0 on algus, aeg1 on lopp
            $ajaAndmed[] = $aeg; //1 el on alguse sekundid, 2 el on lopu sekundid
        }
        $vahe = $ajaAndmed[1] - $ajaAndmed[0];
        $tunnid = (int)($vahe / (60 * 60));//int teisendab taisarvuks
        $minutid = $vahe % (60 * 60) / 60; //j@@k on koik mis ei mahtunud tundidesse
        $ridaFaili = $algus . ";" . $lopp . ";" . $tunnid . ";" . $minutid . "\n"; //rida
        $salvestaFaili = file_put_contents($andmedFail, $ridaFaili, FILE_APPEND | LOCK_EX); //teeb faili lahti lug kirj ja salvestab andmed
        if ($salvestaFaili !== false) {
            echo 'Salvestatud ';
            echo '<a href="soiduaeg_vorm.php">Sisesta andmed!</a>';
        }
    }
}

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
    $failisisu = fopen($andmedFail, 'r') or die('Ei leia faili!');
    $jrk = 1;
    while(!feof($failisisu)){
        $rida = fgetcsv($failisisu, filesize($andmedFail), ';');
    echo '<tr>';
        $arv = count($rida); //rea väljade arv
        if($arv == 4) {
        for ($i = 0; $i < $arv; $i++) {
        echo '<td>' . $rida[$i] . '</td>';
        }
        echo '</tr>';
    }
    }
    fclose($failisisu);
    echo '<tbody>';
    echo '</table>';
    ?>