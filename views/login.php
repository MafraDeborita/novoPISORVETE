<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/novoPISORVETE/templates/cabecalho.php";



?>

<div class="fazTeuLogin">
  <h1>LOGIN</h1>

  <form action="/novoPISORVETE/controllers/login_controller.php" method="post">

    <div class="form-group">
      <label for="email">Endereço de email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
    </div>

    <div class="form-group">
      <label for="senha">Senha</label>
      <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
    </div>

    <div class="form-check">
      <input type="checkbox" id="check" name="check">
      <label for="check">
        Remember me
      </label>
    </div>

    <?php if (!isset($_SESSION['id_usuario'])) : ?>
      <a href="/novoPISORVETE/views/index.php">
        <button type="submit" class="btn btn-primary">Entrar</button></a>
      <?php else : ?>
        <a class="login-btn" href="/novoPISORVETE/controllers/logout_controller.php" style="color: #8c52ff">Sair</a>
      <?php endif; ?>
      




  </form>

  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="/views/cadastro.php">Novo, por aqui? Regitre-se.</a>
  <a class="dropdown-item" href="#">Esqueceu a senha?</a>

</div>


<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/novoPISORVETE/templates/rodape.php";
?>