<?php
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Vorm soiduaegade sisestamiseks</title>
</head>
<body>
<h2>Andmed</h2>
<form action="soiduaeg.php>" method="get">
    Soidu algusaeg <input type="text" name="algus" placeholder="HH:MM"><br><br>
    Soidu loppaeg <input type="text" name="lopp" placeholder="HH:MM"><br><br>
    <input type="submit" value="Arvuta">
</form>
</body>
</html>
