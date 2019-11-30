<?php
//Kuva kuupäev ja kellaaeg formaadis 20.03.2013 12:31
date_default_timezone_set('Europe/Tallinn');
echo date('d.m.Y G:i' , time());

//kuude massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//päevade massiiv
$eesti_nadalapaev = array(1=>'esmaspäev', 'teisipäev', 'kolmapäev', 'neljapäev', 'reede', 'laupäev', 'pühapäev');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
$kuup = date('d');
?>
<br><br>
<?php
//Kuva tänane eestikeelne nädalapäev, N: kolmapäev
$eesti_paev = $eesti_nadalapaev[date('w')];
echo $eesti_paev;
?>
<br><br>
<?php
//Kuva eestikeelne kuupäev koos nädalapäevaga. Näiteks: 23.veebruar 2013 laupäev
echo $kuup,". ", $kuu,". ", $aasta, " ", $eesti_paev;
?>
<br>
<?php

//Leia mitu päeva on jäänud järgmise jaanipäevani
$jaanid = strtotime("2020-06-24");
$now = time();
$vahe = round(($jaanid - $now) /(60 *60*24));
echo '<br>Jaanideni on ', $vahe, ' paeva.';

//Minu sünnipäev on 06.11.1980! Leia kumb on meist vanem. Kuva mõlema sünnikuupäevad ning vahe aastates.
$minusynnipaev = strtotime("1990-03-22");
$temasynnipaev = strtotime("1980-11-06");
$vanusevahe = round(($minusynnipaev - $temasynnipaev)/(60*60*24*30*12));
if ($vanusevahe > 0){
    echo '<br><br>Tema on vanem ', $vanusevahe, ' aasta vorra.';
} else {
    echo '<br><br>Mina olen vanem.';
}
echo '<br>Tema synnipaev on ',date('d.m.Y', $temasynnipaev),'. Minu synnipaev on ',date('d.m.Y', $minusynnipaev),'.';

//Kas on toimunud maailmalopp
$maailmalopp = strtotime("2016-02-29");
$praegu = time();
$loppvoimitte = round(($praegu - $maailmalopp)/(60*60*24));
if ($loppvoimitte > 0){
    echo '<br><br>See ei ole tosi. Maailmaloppu ei ole toimunud';
} else {
    echo '<br><br>Me veel ei tea.';
}

//kas mul on jargmine aasta juubel
$minusynd = strtotime("1994-03-18");
$vanusjargmineaasta = round((time() - $minusynd)/(60*60*24*30*12));
if ($vanusjargmineaasta % 5 == 0) {
    echo '<br><br>Mul on juubel!';
} else {
    echo '<br><br>Mul on tavaline synnipaev.';
}
echo '<br><br>';

//kood mis tervitab vastavalt kellaajale
$aegpraegu = date('G', time());
$tundjaminutpraegu = date('G:i', time());

if ($aegpraegu >= 8 and $aegpraegu < 12){
    echo 'Tere hommikust! Kell on ', $tundjaminutpraegu, '.';
} elseif ($aegpraegu >= 12 and $aegpraegu < 18){
    echo 'Tere paevast! Kell on ', $tundjaminutpraegu, '.';
} elseif ($aegpraegu >= 18 and $aegpraegu < 23) {
    echo 'Tere ohtust! Kell on ', $tundjaminutpraegu, '.';
} else {
    echo 'Mine magama! Kell on ', $tundjaminutpraegu, '.';
}



