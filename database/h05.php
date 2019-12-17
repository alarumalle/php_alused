<?php
// lisame andmebaasitöötlus funktsioonid
require_once 'db_fnk.php';
// lisame kasutusele andmebaasi serveri konfiguratsiooni
require_once 'config.php';
//lisan valjundi kasutamise faili
require_once 'output.php';
// ühendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);

//lehe valjund
echo '<h1>Harjutus 5</h1>';
//andmete sisestamise vorm EI T88TA
lisaAndmedVorm();

if(isset($_GET['enimi']) && isset($_GET['pnimi'])){
    $enimi = $_GET['enimi'];
    $pnimi = $_GET['pnimi'];
    $kontakt = $_GET['kontakt'];

    if (strlen($enimi) > 0 and strlen($pnimi) > 0 and strlen($kontakt) > 0){
        $sql = 'INSERT INTO kliendid SET '.
            'enimi="'.$enimi.'", '.
            'pnimi="'.$pnimi.'", '.
            'kontakt="'.$kontakt.'"';
        $result = query($sql, $ikt);
        if ($result){
            echo 'Andmebaasi on lisatud '.mysqli_affected_rows($ikt).' ridu';
            echo 'Viimane muudetud id on '.mysqli_insert_id($ikt).'<br>';
            //kysi koikide klietide andmed andmebaasist ja valjasta tabeli kujul!!
            $sql = 'SELECT enimi, pnimi, kontakt FROM kliendid';
            $result = getData($sql, $ikt);
            //valjasta tabeli kujul
            $tabeliPealkiri = array('Eesnimi', 'Perenimi', 'Kontakt');
            tabel($result, $tabeliPealkiri);
        }
    }
}