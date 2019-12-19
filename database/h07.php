<?php
// lisame andmebaasitöötlus funktsioonid
require_once 'db_fnk.php';
// lisame kasutusele andmebaasi serveri konfiguratsiooni
require_once 'config.php';
//lisan valjundi kasutamise faili
require_once 'output.php';
// ühendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);

echo '<h1>Harjutus 7</h1>';
//kustutamisparing
$sql = 'SELECT * FROM kliendid';
$result = getData($sql, $ikt);
//kui andmed k@es, joonistame tabeli
$tabeliPealkiri = array('Eesnimi', 'Perenimi', 'Kontakt', '');//minu tabelis olevad andmed peavad olema.. kustutamiseks
tabelKustutaMuuda($result, array());

//kustutamisprotsess:
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

//klikkides muuda nupul, muudame andmed
if(!empty($_GET['muudaID'])){
    $id = $_GET['muudaID']; //see on get massiiv?? kuhu tulevad koik andmed?
//kustutamisparing, nyyd kui ID on k@es, siis kysime ylej@@nud andmed db-ist
    $sql = 'SELECT enimi, pnimi, kontakt FROM kliendid WHERE id="'.$id.'"';
    $result = getData($sql, $ikt);
//    juhul kui andmed olemas, siis lisame need vormi! ehk result on true
    if ($result !== false){
        muudaAndmedVorm($result[0]);
    }
}

//kui vaj muuda nupule, andmed on lingi nimes
if (!empty($_GET['muudanyyd']) and $_GET['muudanyyd']=='Muuda'){

}
