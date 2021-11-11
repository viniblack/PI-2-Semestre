<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./config/connect.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt = $bd->prepare('SELECT id, primeiroNome, email, senha FROM users WHERE email = :email');
$stmt->execute([':email' => $_POST['email']]);

$registro = $stmt->fetch(PDO::FETCH_ASSOC);

if ($registro) {
  if (password_verify($senha, $registro['senha'])) {
    $_SESSION['nome'] = $registro['primeiroNome'];
    $_SESSION['id'] = $registro['id'];
    echo "Credenciais valida";

    header("location:../../index.php");
  } else {
    session_destroy();
    echo "Credenciais inválidas";
  }
} else {
  session_destroy();
  echo "Faça o login antes";
}
