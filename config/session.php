<?php

session_start();

if (!isset($_SESSION) || $_SESSION['tipo_conta'] != "2") :
  require_once('./template/_menu.php');

?>
  <div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 text-center">
          <span class="display-1 d-block"><img src="./imagens/opss.png" alt=""></span>
          <div class="mb-4 lead">
            <p class="h1">
              Ops... Alguma coisa de errada não esta certa!
            </p>
            <p class="h2">
              Volte para página inicial e tente novamente
            </p>
          </div>
          <a href="./index.php" class="btn btn-link fs-3">Voltar para Home</a>
        </div>
      </div>
    </div>
  </div>
<?php
  require_once('./template/_footer.php');
  die;
endif;
?>