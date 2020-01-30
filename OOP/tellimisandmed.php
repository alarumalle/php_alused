<?php

?>

<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="tellimine">
    <meta name="keywords" content="HTML,CSS">
    <meta name="author" content="Malle Alaru">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Welcome to my Burger Shop!</title>
</head>
<body>
<header>
    <div class="maintitle d-flex"><h1>Vali meelep&aumlrane burger</h1></div>
</header>


<form class="vali" action="lisandid.php" method="post">
    <label for="T">Tavaburger</label>
    <input type="radio" id="T" name="tyyp" value="Tava">
    <label for="Te">Tervislik burger</label>
    <input type="radio" id="Te" name="tyyp" value="Tervis">
    <label for="L">Luksuslik burger</label>
    <input type="radio" id="L" name="tyyp" value="Lux">
    <input type="submit" name="submit" value="J &auml t k a">
</form>

</body>
</html>
