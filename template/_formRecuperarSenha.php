<form method="POST" action="./php/recuperarSenha.php">
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input name="email" type="email" class="form-control" id="email">
  </div>
  <div class="mb-3">
    <label for="senha" class="form-label">Senha</label>
    <input name="senha" type="password" class="form-control" id="senha">
  </div>
  <div class="mb-3">
    <label for="novaSenha" class="form-label">Nova senha</label>
    <input name="novaSenha" type="password" class="form-control" id="novaSenha">
  </div>
  <div class="d-grid gap-2">
    <button type="submit" class="btn btn-danger text-white btn-lg">Alterar senha</button>
  </div>
</form>