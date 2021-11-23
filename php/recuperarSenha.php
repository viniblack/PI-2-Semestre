<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("../config/connect.php");

$email = $_POST['email'];
$senha = $_POST['senha'];
$novaSenha = $_POST['novaSenha'];

$stmt = $bd->prepare('SELECT email FROM user WHERE email = :email');
$stmt->execute(([':email' => $email]));
$registro = $stmt->fetch(PDO::FETCH_ASSOC);

if (!($registro['email'] == $email)) die("O email $email ainda não esta cadastrado");

if (!($senha == $novaSenha))  die('A confirmação de senha não confere.');

$passHash = password_hash($senha, PASSWORD_DEFAULT);

$stmt = $bd->prepare(
  "UPDATE `user` SET senha = :senha"
);

$value[':senha'] = $passHash;

if ($stmt->execute($value)) {
  header("location:../../index.php");
} else {
  echo "<br><br>Oh no!! Não consegui gravar no banco :-(";
}
