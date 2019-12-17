<?php
require_once 'db_fnk.php';
// lisame kasutusele andmebaasi serveri konfiguratsiooni
require_once 'config.php';
//lisan valjundi kasutamise faili
require_once 'output.php';
// ühendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);

//p@ringu koostamine
$sql = 'INSERT INTO kliendid SET '.
    'enimi="Karu",'.
    'pnimi="Poeg",'.
    'kontakt="karu.poeg@puhh.com"';
//salvesta andmed andmebaasi
// ei kasuta get datat sest see ei ole select funktsioon
$result = query($sql, $ikt); //vastuseks kas true voi false, kui ei onnestu
if ($result){
    echo 'Andmebaasi on lisatud '.mysqli_affected_rows($ikt).' ridu';
    echo 'Viimane muudetud id on '.mysqli_insert_id($ikt).'<br>';
}