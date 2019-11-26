<?php

//ise pean silmas pidama mis andmetyypi andmeid ma kogun
?>

<h1>Tellimine</h1>
<!--get salvestab $_GET massiivi ja post $_POST massiivi-->
<?php
var_dump($_GET);
echo '<pre>';
print_r($_GET);
echo '</pre>';

$toode1 = $_GET['t1'];
$toode2 = $_GET['t2'];
$toode3 = $_GET['t3'];

echo 'Toode1: '.$toode1.'tk<br>';