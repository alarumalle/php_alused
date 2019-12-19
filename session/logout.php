<?php
session_start();
session_unset();//puhastame muutujad
session_destroy();
header('Location: login.php');
echo '<pre>';