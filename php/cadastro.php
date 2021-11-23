<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("../config/connect.php");

$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmarSenha = $_POST['confirmarSenha'];


if (!($senha == $confirmarSenha)) die('A confirmação de senha não confere.');


$stmt = $bd->prepare('SELECT email FROM user WHERE email = :email');
$stmt->execute([':email' => $_POST['email']]);
$registro = $stmt->fetch(PDO::FETCH_ASSOC);


if ($registro['email'] == $email) {
  die("O email $email já esta cadastrado");
}

$stmt = $bd->prepare(
  'INSERT user
    (primeiroNome, sobrenome, email, senha, tipo_conta) 
  VALUES
   (:primeiroNome, :sobrenome, :email, :senha, :tipo_conta)'
);


$passHash = password_hash($senha, PASSWORD_DEFAULT);

$value[':primeiroNome'] =  $_POST['primeiroNome'];
$value[':sobrenome'] =  $_POST['sobrenome'];
$value[':email'] = $email;
$value[':senha'] = $passHash;
$value[':tipo_conta'] =  $_POST['tipoConta'];

// echo "<pre>";
// var_dump($stmt->execute($value)); die;

if ($stmt->execute($value)) {
  echo "<br><br>Dados gravados com sucesso!";
  header("location:../index.php");
} else {
  echo "<br><br>Oh no!! Não consegui gravar no banco :-(";
}

var_dump($stmt->errorInfo());

// echo "$email, $senha,  $confirmarSenha, $primeiroNome, $sobrenome  e $passHash";
