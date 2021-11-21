<form method="POST" action="../php/login.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input name="senha" type="password" class="form-control" id="senha">
  </div>
  <div class="d-grid gap-2">
    <button type="submit" class="btn btn-danger text-white btn-lg">Entrar</button>
  </div>
  <div class="row">
    <div class="col">
      <small><a href="../cadastro.php">Cadastrar-se</a></small>
    </div>
    <div class="col">
      <small><a href="./recuperarSenha.php">Esqueceu a senha?</a></small>
    </div>
  </div>
</form>