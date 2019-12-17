<?php
// �henduse loomine
function connect($host, $user, $pass, $dbname){
    // �hendus andmebaasiga
    $link = mysqli_connect($host, $user, $pass, $dbname);
    // kui �hendust ei tekkinud
    if($link === false){
        echo 'Probleem andmebaasi �hendusega<br>';
        exit;
    }
    // olemasolev �hendus tagastame p�hiprogrammile
    return $link;
}
// p�ringu saatmine
function query($sql, $link){
    $result = mysqli_query($link, $sql);
    if($result === false){
        echo 'Probleem p�ringuga <b>'.$sql.'</b><br>';
        return false;
    }
    return true;
}