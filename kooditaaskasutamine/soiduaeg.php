<?php
?>
<!--Sõiduaeg – leia auto sõiduaeg tundides ja minutites. Arvutused teosta kasutajalt saadud
andmete põhjal, kus kasutaja lisab stardi ja lõppaja kujul hh:mm. Eeldame, et sõiduaeg jääb
ühe ööpäeva sisse. Lisa tühja välja kontroll ja näiteks, kas lisatud ajad on
vähemalt viis sümbolit pikad.-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>06 - PHP - Vormid</title>
</head>
<body>
<h2>Andmed</h2>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    Soidu algusaeg <input type="text" name="algus" placeholder="HH:MM"><br><br>
    Soidu loppaeg <input type="text" name="lopp" placeholder="HH:MM"><br><br>
    <input type="submit" value="Arvuta">
</form>
<!--arvutus ja andmete t88tlemine-->
<?php

$andmedFail = 'ajad.csv';
$algus = $_GET['algus'];
$lopp = $_GET['lopp'];

if(strlen($algus) == 0 or strlen($lopp) == 0){
    echo 'Sisesta korrektsed ajad';
} else {
    $ajad = array();
    foreach ($_GET as $ajad) {
        $ajad = explode(':', $ajad);
        $ajad = time(H:i);
        $ajaAndmed[] = $ajad;
    }
    $vahe = $ajaAndmed[1] - $ajaAndmed[0];
    $tunnid = (int)($vahe / (60 * 60));
    $minutid = $vahe % (60 * 60) / 60;
    $ridaFaili = $algus.";".$lopp.";".$tunnid.";".$minutid."\n";
    $salvestaFaili = file_put_contents($andmedFail, $ridaFaili,FILE_APPEND | LOCK_EX);
    if($salvestaFaili !== false) {
        echo 'Salvestatud'!;
    } else {
        echo 'Sisesta andmed';
    }
}
echo '<hr>';
echo '<table>'
$failisisu = fopen($andmedFail, 'r') or die('Ei leia faili');
$jrk = 1;
while (!=feof($failisisu)){
    $rida = fgetcsv($failisisu, filesize($andmedFail), ';');
    echo '<tr>';
}
fclose($failisisu);
echo '</table>';
?>

