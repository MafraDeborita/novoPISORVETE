<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/novoPISORVETE/templates/cabecalho.php";
?>

<div class="fazTeuCadastro">
  <h1>Cadastro</h1>

  <form action="/novoPISORVETE/controllers/usuario_add_controller.php" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label for="nome">Nome Completo</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="nome completo">
    </div>

    <div class="form-group">
      <label for="email">Endereço de email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
    </div>

    <div class="form-group">
      <label for="senha">Senha</label>
      <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
    </div>

    <div class="form-group">
            <label for="formFile" class="form-label">Foto de Perfil</label>
            <input class="form-control" type="file" id="formFile">
        </div>

    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck">
      <label class="form-check-label" for="dropdownCheck">
        Remember me
      </label>
    </div>

    <button type="submit">Entrar</button>

  </form>

  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">Já tem Cadastro? Login.</a>
  <a class="dropdown-item" href="#"></a>

</div>



<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/novoPISORVETE/templates/rodape.php";
?>