<?php
// lisame andmebaasitöötlus funktsioonid
require_once 'db_fnk.php';
// lisame kasutusele andmebaasi serveri konfiguratsiooni
require_once 'config.php';
//lisan valjundi kasutamise faili
require_once 'output.php';
// ühendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);

echo '<h1>Harjutus 6</h1>';
//kustutamisparing
$sql = 'SELECT * FROM kliendid';
$result = getData($sql, $ikt);
//kui andmed k@es, joonistame tabeli
$tabeliPealkiri = array('Eesnimi', 'Perenimi', 'Kontakt', '');//minu tabelis olevad andmed peavad olema.. kustutamiseks
tabelKustuta($result, array());
if(!empty($_GET['kustutaID'])){
$id = $_GET['kustutaID'];
//kustutamisparing
    $sql = 'DELETE FROM kliendid WHERE id="'.$id.'"';
    $result = query($sql, $ikt);
    if ($result !== false){
        //taaskaivita antud lk
        header('Location:'.$_SERVER['PHP_SELF']);
    }
}

//$sql = 'DELETE FROM kliendid WHERE id=2';
//$result = query($sql, $ikt);
//if ($result){
//    echo 'Andmebaasist kustutatud '.mysqli_affected_rows($ikt).' ridu';
//}