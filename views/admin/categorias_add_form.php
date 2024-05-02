<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/novoPISORVETE/templates/_cabecalho.php";
?>

<section class="d-flex justify-content-center m-3">
    <form>
        <div class="d-flex justify-content-center">
            <img class="mb-4 w-25" src="/novoPISORVETE/imgs/vitrine_logo.png" alt="">
        </div>

        <h1 class="h3 mb-3 fw-normal">Cadastrar Categoria</h1>

        <div class="form-floating my-3">
            <input type="text" class="form-control" id="nome" placeholder="Nome da Categoria">
            <label for="nome">Nome da Categoria</label>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Cadastrar</button>
    </form>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/novoPISORVETE/templates/_rodape.php";
?>