<?php
//see on ka abifail funktsioonidega
//tabel pealkirjaga
function tabel($andmed, $pealkirjad){
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    foreach ($pealkirjad as $pealkiri){
        echo '<td>'.$pealkiri.'</td>';
    }
    echo '</tr>';
    echo '</thead>';
    echo '<body>';
    //body ehitamiseks koik andmed labi joosta
    foreach ($andmed as $tabeliRida){
        echo '<tr>';
        foreach ($tabeliRida as $vaartus){
            echo '<td>'.$vaartus.'</td>';
        }
        echo '</tr>';
    }
    echo '</body>';
    echo '</table>';
}
    //otsingu vorm
function otsinguVorm(){
    echo '
    <form action="" method="get">
    <input type="text" name="otsi">
    <input type="submit" value="Otsi">
    </form>';
}

function lisaAndmedVorm(){
    echo '
        <form action="" method="get">
        Eesnimi <input type="text" name="enimi">
        Perenimi <input type="text" name="pnimi">
        Kontakt <input type="text" name="kontakt">
        <input type="submit" value="Salvesta">
    </form>';
}