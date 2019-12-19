<?php
$allikas = 'tootajad.csv';
$andmed = array();
$minu_csv = fopen($allikas, 'r') or die('Ei leia faili!');
while(!feof($minu_csv)){
    $rida = fgetcsv($minu_csv, filesize($allikas),';');
    //mida teeb rida?
    $andmed[] = $rida;
    $arv = count($rida); //tulbad infoga
    if ($arv == 3){
        for ($i = 0; $i<$arv; $i++) {
            echo utf8_encode($rida[$i]); //t@pit@hed oigesti
        }
    }
    echo '<br>';

}
fclose($minu_csv);

//arvutused
//korgeim palk n
$n_korgeim = 0;
foreach ($andmed as $isik){
    if ($isik[1] === 'n'){
        if ($isik[2] > $n_korgeim){
            $n_korgeim = $isik[2];

        }
    }
}

$naistep = 0;
$narv = 0;
foreach ($andmed as $isik) {
    //1 on siin sugu, asukoht massiivi sees
    if($isik[1] === 'n'){
        $narv++;
        $naistep = $naistep + $isik[2]; //2 on palk
    }
}
$naiste_kesk = round(($naistep / $narv),2);


echo '<br>';
echo '<hr>';
echo 'Naiste keskmine palk on: '.$naiste_kesk. ' ja korgeim palk on '.$n_korgeim;

//korgeim palk m
$m_korgeim = 0;
foreach ($andmed as $isik){
    if ($isik[1] === 'm'){
        if ($isik[2] > $m_korgeim){
            $m_korgeim = $isik[2];

        }
    }
}
$meestep = 0;
$marv = 0;
foreach ($andmed as $isik) {
    //1 on siin sugu, asukoht massiivi sees
    if($isik[1] === 'm'){
        $marv++;
        $meestep = $meestep + $isik[2]; //2 on palk
    }
}
$meeste_kesk = round(($meestep / $marv),2);
echo '<br>';
echo '<hr>';
echo 'Meeste keskmine palk on: '.$meeste_kesk. ' ja korgeim palk on '.$m_korgeim;
echo '<br>';
echo '<hr>';
if ($naiste_kesk != $meeste_kesk) {
    echo 'Antud tookohas esineb diskrimineerimist soo jargi.';
}
