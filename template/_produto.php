<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



require_once("./config/connect.php");

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$query = $bd->query("SELECT 
          P.id_produto,
          P.nomeProduto,
          P.marcaProduto,
          P.preco,
          P.imagem,
          CP.nome_categoria
        FROM produto P
        INNER JOIN categoria_produto CP
        ON P.categoria = CP.id_categoria_produto
        WHERE P.id_produto = $id
        ORDER BY P.id_produto");

$registros = $query->fetchAll();

foreach ($registros as $registro) :

?>
  <div class="row g-3">
    <div class="col-12 col-sm-6">
      <br class="clearfix">
      <div class="row my-3 gx-3">
        <div class="col-3">
          <img src="<?= $registro['imagem'] ?>" class="img-thumbnail">
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6">
      <h1><?= $registro['nomeProduto'] ?></h1>
      <p>
        <?= $registro['marcaProduto'] ?>
      </p>
      <p>
    </div>
  </div>
<?php
endforeach;
?>