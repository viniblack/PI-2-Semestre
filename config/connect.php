<?php
require_once(__DIR__ . '/config.php');

$bd_dsn = 'mysql:host=' . BD_HOST . ';port=' . BD_PORT . ';dbname=' . BD_NAME;
$bd_user = BD_USER;
$bd_pass = BD_PASS;

// Conhectando com o mySQL
$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

