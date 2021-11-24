<?php
require_once('./config/session.php');
?>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger border-bottom shadow-sm mb-3">
    <div class="container">
      <a class="navbar-brand" href="./index.php"><strong> Mercado vovoZuzu</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav flex-grow-1">
          <li class="nav-item">
            <a href="./index.php" class="nav-link text-white">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white">Promoções</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white">Contatos</a>
          </li>
        </ul>

        <div class="align-self-end">
          <ul class="navbar-nav">


            <?php
            if (empty($_SESSION)) :
            ?>
              <li class="nav-item">
                <a href="./cadastro.php" class="nav-link text-white">Quero Me Cadastrar</a>
              </li>

              <li class="nav-item">
                <a href="./login.php" class="nav-link text-white">Entrar</a>
              </li>
            <?php
            else :
            ?>
              <?php
              if ($_SESSION['tipo_conta'] == 2) :
              ?>
                <li class="nav-item">
                  <a href="./cadastroProduto.php" class="nav-link text-white">Cadastrar produto</a>
                </li>
              <?php
              endif
              ?>
              <li class="nav-item">
                <a href="./php/logout.php" class="nav-link text-white">
                  <img src="imagens/icones/logout.svg" width="20" height="25">
                </a>
              </li>
            <?php endif ?>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>