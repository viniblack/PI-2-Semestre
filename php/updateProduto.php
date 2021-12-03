<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("../config/connect.php");
require_once("../base_path.php");

$produto = $_POST['produto'];
$marca = $_POST['marca'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];
$id_produto = $_POST['id'];
$descricao = $_POST['descricao'];


if (isset($_FILES['imagemProduto'])) {
  $tipo = mime_content_type($_FILES['imagemProduto']['tmp_name']);

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
  $arquivo =  rand(1, 9999999999) . $ext;
  $arquivoMover = BASE_PATH . '/imagens/produtos/' . $arquivo;
  $arquivoURL = "http://localhost/projeto-pi/imagens/produtos/" . $arquivo;


  move_uploaded_file(
    $_FILES['imagemProduto']['tmp_name'],
    $arquivoMover
  );
}

$stmt = $bd->prepare('
  UPDATE produto SET
    nomeProduto = :nomeProduto, 
    marcaProduto = :marcaProduto,
    preco = :preco, 
    imagem = :imagem, 
    categoria = :categoria,
    descricao = :descricao
  WHERE
  id_produto = :id_produto
  ');

// $stmt->bindParam(':nomeProduto', $nomeProduto);
// $stmt->bindParam(':marcaProduto', $marcaProduto);
// $stmt->bindParam(':preco', $preco);
// $stmt->bindParam(':nomeProduto', $nomeProduto);
// $stmt->bindParam(':categoria', $categoria);
// $stmt->bindParam(':id_produto', $id_produto);


$value[':nomeProduto'] = $produto;
$value[':marcaProduto'] = $marca;
$value[':preco'] = $preco;
$value[':imagem'] = $arquivoURL;
$value[':categoria'] = $categoria;
$value[':id_produto'] = $id_produto;
$value[':descricao'] = $descricao;

if ($stmt->execute($value)) {
  echo "<br><br>Dados gravados com sucesso!";
  header("location:../index.php");
} else {
  echo "<br><br>Oh no!! Não consegui gravar no banco :-(";
}
