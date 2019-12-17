<?php
require_once 'db_fnk.php';
// lisame kasutusele andmebaasi serveri konfiguratsiooni
require_once 'config.php';
//lisan valjundi kasutamise faili
require_once 'output.php';
// �hendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);

otsinguVorm();

if(isset($_GET['otsi'])){
    $otsi = $_GET['otsi']; // salvestame otsingu andmed
    // kui andmed on reaalsed - mida on sisestatud vormi input v�lja sisse
    if(strlen($otsi) > 0){
        // koostame antud andmete otsingu p�ring
        $sql = 'SELECT 2015,Kool FROM koolid2015 WHERE Kool LIKE "%'.$otsi.'%"';
        // saadame p�ring andmebaasi
        $result = getData($sql, $ikt);
        // kui andmed on olemas
        if($result !== false){
            // v�ljastame need
            $pealkirjad = array('2015', 'Kool');
            tabel($result, $pealkirjad);
        }
    } else {
        echo 'Tuleb t�psustada otsing <br>';
    }
}
