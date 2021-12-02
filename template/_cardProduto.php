<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("./config/connect.php");

$stmt = $bd->query('SELECT id_produto,imagem, preco, nomeProduto, marcaProduto FROM produto');
$registros = $stmt->fetchAll();

foreach ($registros as $registro) :
?>
  <div class="col-lg-3 col-md-4 col-sm-6 d-flex text-center g-4">
    <div class="card align-items-center p-2 text-center bg-light">
      <img src="<?php echo $registro['imagem'] ?>" alt="produto1" class="rounded" width="160">
      <div class="cost mt-3 text-dark">
        <span>
          R$
          <?php
          echo $registro['preco'];
          ?>
        </span>
      </div>
      <div class="card-body">
        <h5 class="card-title">
          <?php
          echo $registro['nomeProduto'];
          ?>
        </h5>
        <p class="card-text">
          <?php
          echo $registro['marcaProduto'];
          ?>
        </p>
      </div>
      <div class="card-footer">
        <form class="d-block">
          <button class="btn btn-danger" value="<?= $registro['id_produto'] ?>">
            <a class="nav-link text-white" href="./produto.php?id=<?= $registro['id_produto'] ?>">
              Ver produto
            </a>
          </button>
        </form>
      </div>
    </div>
  </div>
<?php
endforeach;
?>