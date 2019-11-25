<?php
$ained = array('matemaatika', 'muusika', 'inglise keel', 'kehaline kasvatus', 'eesti keel');
//sorteerimine
//sort($ained);
//var_dump($ained);

foreach($ained as $aine){
    echo "$aine <br>";
}


$nimed = array('Martin','Hardi','Juhan','Tiina','Sirje','Kaie');
$pallivisked = array(33, 32, 27, 11, 15, 28);
//
var_dump(count($nimed));
var_dump(array_sum($pallivisked));
var_dump(max($pallivisked));
$a = array_combine($nimed, $pallivisked);
print_r(array_keys($a)); //ainult v6tmed?
print_r(array_search(max($a), $a));
