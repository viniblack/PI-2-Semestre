<form method="POST" action="../../controller/login/sigup.php">
  <div class="row">
    <div class="col-6">
      <div class="mb-3">
        <label for="email" class="form-label">Nome</label>
        <input name="firstname" type="text" class="form-control" id="firstname" aria-describedby="emailHelp">
      </div>
    </div>
    <div class="col-6">
      <div class="mb-3">
        <label for="email" class="form-label">Sobrenome</label>
        <input name="lastname" type="text" class="form-control" id="lastname" aria-describedby="emailHelp">
      </div>
    </div>
    <div class="col-12">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
      </div>
    </div>
    <div class="col-12">
      <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input name="password" type="password" class="form-control" id="password">
      </div>
    </div>
    <div class="col-12">
      <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirme sua senha</label>
        <input name="confirmPassword" type="password" class="form-control" id="confirmPassword">
      </div>
    </div>

    <div class="d-grid gap-2">
      <button type="submit" class="btn senac-button-submit text-white btn-lg">Cadastrar-se</button>
    </div>
  </div>

</form>