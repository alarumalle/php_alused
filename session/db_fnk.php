<?php
// kogutud funktsioonid andmebaasiga t88tamiseks, see on ka abifail
function connect($host, $user, $pass, $dbname){
    // �hendus andmebaasiga
    $link = mysqli_connect($host, $user, $pass, $dbname);
    // kui �hendust ei tekkinud
    if($link === false){
        echo 'Probleem andmebaasi �hendusega<br>';
        exit;
    }
    // m��rame utf-8
    mysqli_set_charset($link, 'utf8');
    // olemasolev �hendus tagastame p�hiprogrammile
    return $link;
}
// suvalise p�ringu saatmine andmebaasi
function query($sql, $link){
    $result = mysqli_query($link, $sql);
    if($result === false){
        echo 'Probleem p�ringuga <b>'.$sql.'</b><br>';
        return false;
    }
    return $result;
}
// SELECT, SHOW, DESCRIBE or EXPLAIN sql jaoks
function getData($sql, $link){
    $result = query($sql, $link); // saadame p�ring meie funktsiooni abil
    $data = array(); // siin salvestame p�ringu andmed
    // nii kaua, kui andmed on, loeme need
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $data[] = $row; // ja salvestame meie massiivi
    }
    // kui massiiv on t�hi - andmete lugemise probleem
    if(count($data) == 0){
        return false;
    }
    // muidu tagastame loetud andmed
    return $data;
}