<?php

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ylesanne 3</title>
</head>
<body>
<h1>Ylesanne 3</h1>

<!--action on kus asub t88tlus, kuhu saadetakse andmed-->
<!--method ytleb mil viisil need andmed saadetakse l@bi veebi-->
<!--saadetavate el name peab olema m@@ratletud, muidu andmed l@hevad 6hku ja ei j6ua serverini-->
<form action="ylesanne3_teostamine.php" method="get">
    Kera raadius <input type="text" name="r1"><br><br>
    Koonuse pohja raadius <input type="text" name="r2"><br>
    Koonuse korgus <input type="text" name="k_korgus"><br><br>
    Silindri raadius <input type="text" name="r3"><br>
    Silindri korgus <input type="text" name="s_korgus"><br>
    <input type="submit" value="Saada">
</form>

</body>
</html>

<?php

$r1 = $_GET['r1'];
$kera_r = (4/3) * pow(3, $r1) * M_PI;
print_r($kera_r);
?>
    <br>
<?php
$r2 = $_GET['r2'];
$k_korgus = $_GET['k_korgus'];
$koonuse_base_area_kolmega = (pow(2, $r2) * M_PI)/3;
$koonus_ruumala = $koonuse_base_area_kolmega * $k_korgus;
print_r($koonus_ruumala);
?>
    <br>
<?php
$r3 = $_GET['r3'];
$s_korgus = $_GET['s_korgus'];
$silindri_ruumala = pow(2, $r3) * M_PI * $k_korgus;
print_r($silindri_ruumala);

?>
