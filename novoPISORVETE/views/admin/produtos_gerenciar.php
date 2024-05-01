<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/novoPISORVETE/templates/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/novoPISORVETE/models/produto.php';

try {
    $lista = Produto::listar();
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>



<section class="m-3">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Categoria</th>

                <th scope="col" colspan="2" class="text-center">
                    <a href="/novoPISORVETE/views/admin/produtos_add_form.php" title="Adicionar Produto">
                        <span class="material-symbols-outlined text-success">add_box</span>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $p) : ?>
                <tr>
                    <th scope="row"><?=$p['id_produto']?></th>
                    <td><?=$p['nome_produto']?></td>
                    <td><?=$p['preco']?></td>
                    <td><?=$p['id_categoria']?></td>

                    <td class="text-center">
                        <a href="/novoPISORVETE/views/admin/produtos_edt_form.php" title="Editar Produto">
                            <span class="material-symbols-outlined">edit</span>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="" title="Deletar Produto">
                            <span class="material-symbols-outlined text-danger">delete</span>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

<?php
require_once "../../templates/_rodape.php";
?>