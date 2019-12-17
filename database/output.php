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

function tabelKustutaMuuda($andmed, $pealkirjad){
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    foreach ($pealkirjad as $pealkiri){
        echo '<td>'.$pealkiri.'</td>';
    }
    echo '</tr>';
    echo '</thead>';
    echo '<body>';
    //teeme tabeli
    foreach ($andmed as $tabeliRida){
        echo '<tr>';
            echo '<td>'.$tabeliRida['enimi'].'</td>';
            echo '<td>'.$tabeliRida['pnimi'].'</td>';
            echo '<td>'.$tabeliRida['kontakt'].'</td>';
            echo '<td><a href="?kustutaID='.$tabeliRida['id'].'">Kustuta</a></td>';
            echo '<td><a href="?muudaID='.$klient['id'].'">muuda</a></td>';
        echo '</tr>';
        }
    echo '</body>';
    echo '</table>';
    }


function muudaAndmedVorm($andmed){
    echo '
  <form action="" method="post">
//  hidden element on olemas, aga seda ei kuvata
    <input type="text" name="id" value="'.$andmed['id'].'" hidden><br>
    <label for="enimi">Eesnimi</label> <input type="text" name="enimi" id="enimi" value="'.$andmed['enimi'].'"><br>
    <label for="pnimi">Perenimi</label> <input type="text" name="pnimi" id="pnimi" value="'.$andmed['pnimi'].'"><br>
    <label for="kontakt">Kontakt</label> <input type="text" name="kontakt" id="kontakt" value="'.$andmed['kontakt'].'"><br>
    <input type="submit" value="Muuda" name="muudanyyd">
  </form>';
}
