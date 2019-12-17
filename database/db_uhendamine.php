<?php
// ühenduse loomine
function connect($host, $user, $pass, $dbname){
    // ühendus andmebaasiga
    $link = mysqli_connect($host, $user, $pass, $dbname);
    // kui ühendust ei tekkinud
    if($link === false){
        echo 'Probleem andmebaasi ühendusega<br>';
        exit;
    }
    // olemasolev ühendus tagastame põhiprogrammile
    return $link;
}
// päringu saatmine
function query($sql, $link){
    $result = mysqli_query($link, $sql);
    if($result === false){
        echo 'Probleem päringuga <b>'.$sql.'</b><br>';
        return false;
    }
    return true;
}