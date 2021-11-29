<form method="POST" action="./php/cadastroProduto.php" enctype="multipart/form-data">
  <div class="row">
    <div class="col-6">
      <div class="mb-3">
        <label for="produto" class="form-label">Nome do produto</label>
        <input placeholder="Nome do produto" name="produto" type="text" class="form-control" id="produto">
      </div>
    </div>
    <div class="col-6">
      <div class="mb-3">
        <label for="marca" class="form-label">Marca</label>
        <input placeholder="Nome da marca" name="marca" type="text" class="form-control" id="marca">
      </div>
    </div>
    <div class="col-6">
      <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input placeholder="22,00" name="preco" type="text" class="form-control " id="preco">
      </div>
    </div>
    <div class="col-6">
      <div class="mb-3">
        <label for="categoria" class="form-label">Categorias</label>
        <select id="categoria" name="categoria" class="form-select" >
          <option selected>Escolha a categoria</option>
          <option value="1">Promoções</option>
          <option value="2">Bebidas</option>
          <option value="3">Açougue</option>
          <option value="4">Laticínios</option>
          <option value="5">Limpeza</option>
          <option value="6">Mercearia</option>
        </select>
      </div>
    </div>
    <div class="col-12">
      <div class="mb-3">
        <label for="imagemProduto" class="form-label">Imagem do produto</label>
        <input name="imagemProduto" type="file" class="form-control" id="imagemProduto">
      </div>
    </div>

    <div class="d-grid gap-2">
      <button type="submit" class="btn btn-danger text-white btn-lg">Cadastrar produto</button>
    </div>
  </div>

</form>