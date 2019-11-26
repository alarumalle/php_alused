<?php
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
<br>
<?php

$paev = $eesti_nadalapaev[date('w')];
echo $paev;
?>
<br>
<?php
echo $kuup,". ", $kuu,". ", $aasta, " ", $paev;
?>
<br>
<?php
$now = strtotime("26-11-2019");
$jaanipaev = strtotime(24-06-2020);
$vahe = date_diff($now, $jaanipaev);
echo $vahe;
//$date2=date_create("2013-12-12");
//$diff=date_diff($date1,$date2);
//echo $date1;
