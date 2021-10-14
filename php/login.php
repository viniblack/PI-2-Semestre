<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$email = $_POST['email'];
$passWord = $_POST['password'];

$db_dns = 'mysql:localhost;port=3306;dbname=projeto-integrador';
$db_user = 'root';
$db_pass = '123!@#qweQWE';

$db = new PDO($db_dsn, $db_user, $db_pass);

$stmt = $db->prepare('SELECT email, password FROM users WHERE email = :email');

$stmt->execute([':email' => $_POST['email']]);

$registro = $stmt->fetch(PDO::FETCH_ASSOC);