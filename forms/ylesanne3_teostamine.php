<?php

$r1 = $_GET['r1'];
$kera_r = (4/3) * pow(3, $r1) * M_PI;
print_r($kera_r);
?>
<br>
<?php
$r2 = $_GET['r2'];
$k_korgus = $_GET['k_korgus'];
$koonuse_base_area_kolmega = (pow(2, $r2) * M_PI)/3;
$koonus_ruumala = $koonuse_base_area_kolmega * $k_korgus;
print_r($koonus_ruumala);
?>
<br>
<?php
$r3 = $_GET['r3'];
$s_korgus = $_GET['s_korgus'];
$silindri_ruumala = pow(2, $r3) * M_PI * $k_korgus;
print_r($silindri_ruumala);
