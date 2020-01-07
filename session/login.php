<?php

require_once 'config.php';
require_once 'db_fnk.php';
require_once 'output.php';
// ühendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);

//n@ita sisselogimisvormi
loginVorm();

//kontrollime kas andmed on saadetud
if (!empty($_POST['nimi']) and !empty($_POST['parool'])){
    $nimi = $_POST['nimi'];
    $parool = $_POST['parool'];

    echo $nimi, $parool;
//kysime kas selline kasutaja on
$sql = 'SELECT * FROM kasutajad WHERE nimi="'.$nimi.'" AND parool="'.md5($parool).'"';
$result = getData($sql, $ikt);

echo '<pre>';
print_r($result);
//loome sessiooni antud kasutaja jaoks
session_start();
$_SESSION['kasutaja'] = $result[0]['nimi']; //salvestame kasutajanime
}

echo session_id();
echo '<pre>';
print_r($_SESSION);

//kui session on loodod
//ytle teretulemast
if (!empty($_SESSION['kasutaja'])){
    echo 'Tere tulemast', '.$_SESSION'['kasutaja'].'!<br>';
    echo '<a href="logout.php">Logi valja</a>';
} else {
    //kui ei ole siis n@idatakse logimisvormi
    loginVorm();
}