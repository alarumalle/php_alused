<?php

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>06 - PHP - Vormid</title>
</head>
<body>
<h1>Kauplus OÜ</h1>

<!--action on kus asub t88tlus, kuhu saadetakse andmed-->
<!--method ytleb mil viisil need andmed saadetakse l@bi veebi-->
<!--saadetavate el name peab olema m@@ratletud, muidu andmed l@hevad 6hku ja ei j6ua serverini-->
<form action="tellimine.php" method="get">
    Toode 1 <input type="text" name="t1"><br>
    Toode 2 <input type="text" name="t2"><br>
    Toode 3 <input type="text" name="t3"><br>
    <input type="submit" value="Saada">
</form>

</body>
</html>
