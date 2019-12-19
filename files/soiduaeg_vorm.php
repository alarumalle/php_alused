<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vorm soiduaegade sisestamiseks</title>
</head>
<body>
<h2>Andmed</h2>
<form action="soiduaeg.php" method="get">
    <label for="algus">Soidu algus: </label>
    <input type="text" name="algus" id="algus" placeholder="HH:MM"><br><br>
    <label for="lopp">Soidu lopp: </label>
   <input type="text" name="lopp" id="lopp" placeholder="HH:MM"><br><br>
    <input type="submit" value="Arvuta ja salvesta faili">
</form>
</body>
</html>