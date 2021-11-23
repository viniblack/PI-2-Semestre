<form method="POST" action="./php/cadastro.php">
  <div class="row">
    <div class="col-6">
      <div class="mb-3">
        <label for="primeiroNome" class="form-label">Nome</label>
        <input name="primeiroNome" type="text" class="form-control" id="primeiroNome">
      </div>
    </div>
    <div class="col-6">
      <div class="mb-3">
        <label for="sobrenome" class="form-label">Sobrenome</label>
        <input name="sobrenome" type="text" class="form-control" id="sobrenome">
      </div>
    </div>
    <div class="col-6">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="email">
      </div>
    </div>
    <div class="col-6">
      <div class="mb-3">
        <label for="email" class="form-label">Tipo de conta</label>
        <select name="tipoConta" class="form-select" aria-label="Default select example">
          <option selected>Escolha o tipo de conta</option>
          <option value="1">Cliente</option>
          <option value="2">Vendedor</option>
        </select>
      </div>
    </div>
    <div class="col-12">
      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input name="senha" type="password" class="form-control" id="senha">
      </div>
    </div>
    <div class="col-12">
      <div class="mb-3">
        <label for="confirmarSenha" class="form-label">Confirme sua senha</label>
        <input name="confirmarSenha" type="password" class="form-control" id="confirmarSenha">
      </div>
    </div>

    <div class="d-grid gap-2">
      <button type="submit" class="btn btn-danger text-white btn-lg">Cadastrar-se</button>
    </div>
  </div>

</form>