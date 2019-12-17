<?php
// lisame andmebaasitöötlus funktsioonid
require_once 'db_fnk.php';
// lisame kasutusele andmebaasi serveri konfiguratsiooni
require_once 'config.php';
//lisan valjundi kasutamise faili
require_once 'output.php';
// ühendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);
// tabeli ümbernimetamine
$sql = 'select Kool, Kokku from koolid2015';
//$sql = 'RENAME TABLE `anna_db`.`TABLE 1` TO `anna_db`.`koolid2015`';
$result = getdata($sql, $ikt);
$tabeliPealkirjad = array('Kool', '2015');
    tabel($result, $tabeliPealkirjad);