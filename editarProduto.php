<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="icon" href="imagens/logoprovisorio.png">

  <link href="./css/style.css" rel="stylesheet">
  <title>Editar produto - Supermercado Vovó</title>
</head>

<?php

require_once("./config/connect.php");

require_once('./php/Produto.class.php');

$objProduto = new Produto($bd);
?>


<body style="min-width: 372px;">

  <?php
  require_once('./template/_menu.php');
  ?>
  <main class="mb-5 pb-5 mb-md-0">
    <div class="container">
      <div class="row mx-auto bg-white py-5 rounded d-flex justify-content-center">
        <h2 class="text-center mb-5 inline-block">Editar Produto</h2>
        <div class="row">
          <?php

          if (isset($_POST['apagar'])) {

            $apagado = $objProduto->apagar($_POST['apagar']);
          }

          if (isset($_POST['editar'])) {
            $d = $objProduto->listar($_POST['editar']);

            $produto = $d[$_POST['editar']];

            include_once './template/_cadastroProduto.php';
          }

          if (isset($_POST['id'])) { //Se existir o $_POST['id'] que vem do form de edição, faça

            if (is_numeric($_POST['id'])) { //Verifique se é numérico

              //Salve a alteração
              $alterado = $objProduto->salvar($_POST);
            }
          }

          if (!isset($_POST['editar'])) {
            $lista = $objProduto->listar();
            require_once('./template/_lista.php');
          }
          ?>
        </div>
      </div>
    </div>
  </main>
  <?php
  require_once('./template/_footer.php');
  ?>
</body>

</html>