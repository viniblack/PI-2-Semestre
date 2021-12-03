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
          P.descricao,
          CP.nome_categoria
        FROM produto P
        INNER JOIN categoria_produto CP
        ON P.categoria = CP.id_categoria_produto
        WHERE P.id_produto = $id
        ORDER BY P.id_produto");

$registros = $query->fetchAll();

foreach ($registros as $registro) :

?>
  <div class="row single-product-area d-flex justify-content-center mt-5">
    <div class="col-3">
      <br class="clearfix">
      <div class="col-3">
        <img src="<?= $registro['imagem'] ?>" class="">
      </div>

    </div>
    <div class="col-6">
      <div class="mb-4">
        <h1 class="text-capitalize"><?= $registro['nomeProduto'] ?> - <?= $registro['marcaProduto'] ?></h1>
      </div>
      <div>
        <p class="">
          <?php echo $registro['descricao']  ?>
        </p>
      </div>
    </div>
  </div>
<?php
endforeach;
?>