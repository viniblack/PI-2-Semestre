<?php
require_once('../common/head.php');

// require_once('../../controller/session/session.php');

?>

<div class="container-fluid senac-container  d-flex align-items-center">
  <div class="container">
    <div class="row mx-auto bg-white w-50 py-5 rounded d-flex justify-content-center">
      <h2 class="text-center mb-5 inline-block">Faça seu login</h2>
      <div class="col d-flex justify-content-center ">

        <!-- componente do login -->
          <?php require_once("./_formLogin.php"); ?>
      </div>
    </div>
  </div>
</div>
</body>

<?php
require_once('../common/footer.php');
?>