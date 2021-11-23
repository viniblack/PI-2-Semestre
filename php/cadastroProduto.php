<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("./config/connect.php");


$produto = $_POST['produto'];
$marca = $_POST['marca'];
$preco = $_POST['preco'];

var_dump($_FILES); die;

if (isset($_FILES['imagemProduto'])) {
  mime_content_type($_FILES['imagemProduto']['tmp_name']);

  switch ($tipo) {
    case 'image/jpeg':
      $ext = '.jpg';
      break;

    case 'image/jpeg':
      $ext = '.jpeg';
      break;

    case 'image/png':
      $ext = '.png';
      break;

    default:
      echo "Tipo de arquivo não aceito!";
      die();
  }
  $arquivo = __DIR__ . '/imagens/produtos/' . rand(1, 9999999999);

  move_uploaded_file(
    $_FILES['upload']['tmp_name'],
    $arquivo
  );
}

$stmt = $bd->prepare(
  'INSERT INTO produto (nomeProduto, marcaProduto, preco, imagem)
    VALUES (:nomeProduto, :marcaProduto, :preco, :imagem)'
);

$value[':nomeProduto'] = $produto;
$value[':marcaProduto'] = $marca;
$value[':preco'] = $preco;
$value[':imagem'] = $arquivo;

if ($stmt->execute($value)) {
  echo "<br><br>Dados gravados com sucesso!";
  header("location:../index.php");
} else {
  echo "<br><br>Oh no!! Não consegui gravar no banco :-(";
}
