<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/novoPISORVETE/templates/_cabecalho.php";
?>

<section class="d-flex justify-content-center m-3">
    <form>
        <div class="d-flex justify-content-center">
            <img class="mb-4 w-25" src="/novoPISORVETE/imgs/vitrine_logo.png" alt="">
        </div>

        <h1 class="h3 mb-3 fw-normal">Editar Produto</h1>

        <div class="form-floating my-3">
            <input type="text" class="form-control" id="nome" placeholder="Nome do Produto" value="Camisa">
            <label for="nome">Nome do Produto</label>
        </div>

        <div class="form-floating my-3">
            <input type="number" class="form-control" id="preco" placeholder="" value="50">
            <label for="preco">Preço</label>
        </div>

        <select class="form-select my-3" aria-label="Default select example">
            <option value="Roupas" selected>Roupas</option>
            <option value="Calçados">Calçados</option>
            <option value="Acessórios">Acessórios</option>
        </select>

        <div class="form-floating my-3">
            <textarea class="form-control" placeholder="Descrição do Produto" id="floatingTextarea">Uma Camisa</textarea>
            <label for="floatingTextarea">Descrição</label>
        </div>

        <div class="my-3">
            <label for="formFile" class="form-label">Foto do Produto</label>
            <input class="form-control" type="file" id="formFile">
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Atualizar</button>
    </form>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/novoPISORVETE/templates/_rodape.php";
?>