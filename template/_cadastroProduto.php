<form method="POST" action="../php/cadastroProduto.php" enctype="multipart/form-data">
  <div class="row">
    <div class="col-6">
      <div class="mb-3">
        <label for="produto" class="form-label">Nome do produto</label>
        <input name="produto" type="text" class="form-control" id="produto">
      </div>
    </div>
    <div class="col-6">
      <div class="mb-3">
        <label for="marca" class="form-label">Marca</label>
        <input name="marca" type="text" class="form-control" id="marca">
      </div>
    </div>
    <div class="col-12">
      <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input name="preco" type="text" class="form-control " id="preco">
      </div>
    </div>
    <div class="col-12">
      <div class="mb-3">
        <label for="confirmarSenha" class="form-label">Imagem do produto</label>
        <input name="confirmarSenha" type="file" class="form-control" id="confirmarSenha">
      </div>
    </div>

    <div class="d-grid gap-2">
      <button type="submit" class="btn btn-danger text-white btn-lg">Cadastrar produto</button>
    </div>
  </div>

</form>