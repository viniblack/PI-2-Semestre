<div class="col-12">
  <a href="../cadastroProduto.php"><button class="btn btn-primary">Novo produto</button></a>
</div>
<div class="col-12">
  <?php
  if (isset($apagado)) {

    if ($apagado) {

      echo '  <div class="alert alert-success" role="alert">
                    Disciplina apagada com sucesso!
                </div>';
    } else {

      echo '  <div class="alert alert-danger" role="alert">
                    Erro ao tentar apagar a disciplina!
                </div>';
    }
  }
  if (isset($criado)) {

    if ($criado) {

      echo '  <div class="alert alert-success" role="alert">
                    Disciplina criada com sucesso!
                </div>';
    } else {

      echo '  <div class="alert alert-danger" role="alert">
                    Erro ao tentar criar a disciplina!
                </div>';
    }
  }
  if (isset($alterado)) {

    if ($alterado) {

      echo '  <div class="alert alert-success" role="alert">
                    Disciplina alterada com sucesso!
                </div>';
    } else {

      echo '  <div class="alert alert-danger" role="alert">
                    Erro ao tentar alterada a disciplina!
                </div>';
    }
  }
  ?>
</div>
<form method="post" action="">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Produto</th>
        <th>Marca</th>
        <th>preco</th>
        <th>Categoria</th>
        <th>Imagem</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
            foreach ($lista as $id => $produto) :
            ?>
        <tr>
          <td><?php echo $id; ?></td>
          <td><?php echo $produto['nomeProduto']; ?></td>
          <td><?php echo $produto['marcaProduto']; ?></td>
          <td><?php echo $produto['preco']; ?></td>
          <td><?php echo $produto['nome_categoria']; ?></td>
          <td><img src="<?php echo $produto['imagem'] ?>" alt="produto1" class="rounded" width="120"></td>
          <td><button name="editar" class="btn btn-secondary" value="<?php echo $id; ?>">Editar</button></td>
          <td><button name="apagar" class="btn btn-danger" value="<?php echo $id; ?>">Apagar</button></td>
        </tr>
      <?php
            endforeach
      ?>
      <!-- <tr>
        <td> Teste de tudo</td>
        <td> Teste de tudo</td>
        <td> Teste de tudo</td>
        <td> Teste de tudo</td>
        <td> Teste de tudo</td>
        <td> Teste de tudo</td>

        <td><button name="editar" class="btn btn-secondary" value="<?php echo $id; ?>">Editar</button></td>
        <td><button name="apagar" class="btn btn-danger" value="<?php echo $id; ?>">Apagar</button></td>
      </tr> -->
    </tbody>
  </table>
</form>